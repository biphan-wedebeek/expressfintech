<?php

namespace App\Services;

use App\Models\Network;
use App\Models\PostbackLog;
use App\Models\Tracklink;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdvertiserPostbackService
{
    public function handleInbound(Request $request, Network $network): array
    {
        $config = $network->fin_value_config ?? [];

        $clickParam = $config['click_id_param'] ?? $config['click_param'] ?? 'clickid';
        $payoutParam = $config['credit_param'] ?? $config['payout_param'] ?? 'payout';
        $saleAmountParam = $config['sale_amount_param'] ?? null;
        $pubIdParam = $config['other_param'] ?? $config['pubid_param'] ?? null;

        $clickId = $request->query($clickParam);
        if (blank($clickId) && $clickParam !== 'clickid') {
            $clickId = $request->query('clickid');
        }

        $payout = $request->query($payoutParam);
        if (blank($payout) && $payoutParam !== 'payout') {
            $payout = $request->query('payout');
        }

        $saleAmount = $saleAmountParam ? $request->query($saleAmountParam) : null;
        $pubId = $pubIdParam ? $request->query($pubIdParam) : null;

        if (blank($clickId)) {
            $this->logInbound(
                null,
                null,
                $request->fullUrl(),
                'FAILED: missing click id'
            );

            return [
                'success' => false,
                'message' => 'Missing click id',
                'duplicate' => false,
                'tracklink_id' => null,
                'outbound' => null,
                'code' => 422,
            ];
        }

        $tracklink = Tracklink::query()
            ->with(['offer', 'affiliate'])
            ->find($clickId);

        if (! $tracklink) {
            $this->logInbound(
                null,
                null,
                $request->fullUrl(),
                'FAILED: tracklink not found'
            );

            return [
                'success' => false,
                'message' => 'Tracklink not found',
                'duplicate' => false,
                'tracklink_id' => null,
                'outbound' => null,
                'code' => 404,
            ];
        }

        if ((int) $tracklink->flead === 1) {
            $this->logInbound(
                $tracklink->offer_id,
                $tracklink->id,
                $request->fullUrl(),
                'DUPLICATE: already converted'
            );

            return [
                'success' => true,
                'message' => 'Duplicate conversion ignored',
                'duplicate' => true,
                'tracklink_id' => $tracklink->id,
                'outbound' => null,
                'code' => 200,
            ];
        }

        $tracklink->update([
            'flead' => 1,
            'amount' => is_numeric($payout) ? $payout : 0,
            'sale_amount' => is_numeric($saleAmount) ? $saleAmount : null,
            'status' => 2,
        ]);

        $this->logInbound(
            $tracklink->offer_id,
            $tracklink->id,
            $request->fullUrl(),
            'SUCCESS: conversion updated'
        );

        $outbound = $this->sendOutboundToWedebeek($tracklink, [
            'express_click_id' => (string) $tracklink->id,
            'sub1' => (string) ($tracklink->sub1 ?? ''),
            'sub2' => (string) ($tracklink->sub2 ?? ''),
            'payout' => (string) $tracklink->amount,
            'pub_id' => (string) ($pubId ?? ''),
            'sale_amount' => (string) ($tracklink->sale_amount ?? ''),
        ]);

        return [
            'success' => true,
            'message' => 'Conversion updated successfully',
            'duplicate' => false,
            'tracklink_id' => $tracklink->id,
            'outbound' => $outbound,
            'code' => 200,
        ];
    }

    protected function sendOutboundToWedebeek(Tracklink $tracklink, array $payload): array
    {
        $affiliate = $tracklink->affiliate;

        if (! $affiliate) {
            $this->logOutbound(
                $tracklink->offer_id,
                $tracklink->id,
                '',
                'SKIPPED: no affiliate found on tracklink'
            );

            return [
                'success' => false,
                'url' => '',
                'message' => 'Outbound skipped: no affiliate found',
            ];
        }

        $template = trim((string) ($affiliate->postback_url ?? ''));

        if ($template === '') {
            $this->logOutbound(
                $tracklink->offer_id,
                $tracklink->id,
                '',
                'SKIPPED: empty affiliate postback_url'
            );

            return [
                'success' => false,
                'url' => '',
                'message' => 'Outbound skipped: empty affiliate postback_url',
            ];
        }

        $finalUrl = $this->replaceOutboundTemplate($template, $payload);

        try {
            /** @var Response $response */
            $response = Http::timeout(15)->get($finalUrl);

            $body = $response->body();

            $this->logOutbound(
                $tracklink->offer_id,
                $tracklink->id,
                $finalUrl,
                'HTTP ' . $response->status() . ': ' . mb_substr($body, 0, 2000)
            );

            return [
                'success' => $response->successful(),
                'status' => $response->status(),
                'url' => $finalUrl,
                'body' => $body,
            ];
        } catch (\Throwable $e) {
            $this->logOutbound(
                $tracklink->offer_id,
                $tracklink->id,
                $finalUrl,
                'ERROR: ' . $e->getMessage()
            );

            return [
                'success' => false,
                'url' => $finalUrl,
                'message' => $e->getMessage(),
            ];
        }
    }

    protected function replaceOutboundTemplate(string $template, array $payload): string
    {
        $expressClickId = (string) ($payload['express_click_id'] ?? '');
        $sub1 = (string) ($payload['sub1'] ?? '');
        $sub2 = (string) ($payload['sub2'] ?? '');
        $payout = (string) ($payload['payout'] ?? '');
        $pubId = (string) ($payload['pub_id'] ?? '');
        $saleAmount = (string) ($payload['sale_amount'] ?? '');

        $clickIdForOutbound = $sub2 !== '' ? $sub2 : $expressClickId;

        $replacements = [
            '{clickid}' => $clickIdForOutbound,
            '{click_id}' => $clickIdForOutbound,
            '{transaction_id}' => $clickIdForOutbound,
            '{aff_click_id}' => $clickIdForOutbound,

            '{sub1}' => $sub1,
            '{sub2}' => $sub2,

            '{payout}' => $payout,
            '{payout_amount}' => $payout,
            '{commission}' => $payout,
            '{credit}' => $payout,

            '{pubid}' => $pubId,
            '{pub_id}' => $pubId,

            '{sale_amount}' => $saleAmount,
            '{revenue}' => $saleAmount,
        ];

        $url = strtr($template, $replacements);

        return $this->appendMissingQueryParams($url, [
            'sub1' => $sub1,
            'sub2' => $sub2,
        ]);
    }

    protected function appendMissingQueryParams(string $url, array $params): string
    {
        $parts = parse_url($url);

        $existingQuery = [];
        if (! empty($parts['query'])) {
            parse_str($parts['query'], $existingQuery);
        }

        foreach ($params as $key => $value) {
            if ($value === '' || $value === null) {
                continue;
            }

            if (! array_key_exists($key, $existingQuery)) {
                $existingQuery[$key] = $value;
            }
        }

        $rebuiltQuery = http_build_query($existingQuery);

        $final =
            (($parts['scheme'] ?? '') !== '' ? $parts['scheme'] . '://' : '') .
            ($parts['host'] ?? '');

        if (! empty($parts['port'])) {
            $final .= ':' . $parts['port'];
        }

        $final .= $parts['path'] ?? '';

        if ($rebuiltQuery !== '') {
            $final .= '?' . $rebuiltQuery;
        }

        if (! empty($parts['fragment'])) {
            $final .= '#' . $parts['fragment'];
        }

        return $final;
    }

    protected function logInbound(?int $offerId, ?int $tracklinkId, string $requestUrl, string $response): void
    {
        PostbackLog::create([
            'direction' => 'incoming_advertiser',
            'offer_id' => $offerId,
            'tracklink_id' => $tracklinkId,
            'request_url' => $requestUrl,
            'response' => $response,
        ]);
    }

    protected function logOutbound(?int $offerId, ?int $tracklinkId, string $requestUrl, string $response): void
    {
        PostbackLog::create([
            'direction' => 'outgoing_wedebeek',
            'offer_id' => $offerId,
            'tracklink_id' => $tracklinkId,
            'request_url' => $requestUrl,
            'response' => $response,
        ]);
    }
}