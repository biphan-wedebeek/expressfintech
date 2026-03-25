<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Affiliate;
use App\Models\Tracklink;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClickTrackingController extends Controller
{
    public function handle(Request $request): Response
    {
        $offerId = (int) $request->query('offer_id');
        $affiliateId = (int) $request->query('affiliate_id');

        if (!$offerId) {
            throw new NotFoundHttpException('Offer ID is required.');
        }

        if (!$affiliateId) {
            throw new NotFoundHttpException('Affiliate ID is required.');
        }

        $offer = Offer::query()
            ->with('network')
            ->where('id', $offerId)
            ->where('status', true)
            ->first();
        $affiliate = Affiliate::query()->find($affiliateId);

        if (!$affiliate) {
            throw new NotFoundHttpException('Affiliate not found.');
        }

        if (!$offer) {
            throw new NotFoundHttpException('Offer not found or inactive.');
        }

        $tracklink = Tracklink::create([
            'offer_id'          => $offer->id,
            'ip_address'        => $request->ip(),
            'affiliate_id'      => $affiliate->id,
            'sub1'              => $request->query('sub1'),
            'sub2'              => $request->query('sub2'),
            'flead'             => 0,
            'status'            => 1,
            'user_agent'        => substr((string) $request->userAgent(), 0, 1000),
            'browser'           => $this->detectBrowser($request->userAgent()),
            'operating_system'  => $this->detectOperatingSystem($request->userAgent()),
            'device_type'       => $this->detectDeviceType($request->userAgent()),
            'device_manuf'      => $this->detectDeviceManufacturer($request->userAgent()),
            'user_language'     => substr((string) $request->header('Accept-Language'), 0, 255),
            'country'           => null,
            'referrer_url'      => substr((string) $request->header('Referer'), 0, 1000),
        ]);

        $clickId = $tracklink->id;
        $network = $offer->network;
        $trackingFollow = $network?->fin_subid ?? '';

        $affSub = $this->buildAffSub($trackingFollow, [
            'click_id' => $clickId,
            'pubid' => $affiliate->id,
            's3' => (string) $request->query('sub1', ''),
            's4' => (string) $request->query('sub2', ''),
        ]);

        $finalUrl = $this->appendAffSubToUrl($offer->tracking_url, $affSub);

        if ($affSub === '') {
            $finalUrl = $this->appendQueryParam($offer->tracking_url, 'clickid', $clickId);
        }


        // thêm dòng này
        $currentClickUrl = $request->fullUrl();
        // $finalUrl = $this->appendQueryParam($finalUrl, 'source_click', $currentClickUrl);
        // $finalUrl = $this->appendQueryParam($finalUrl, 'source_click', $tracklink->id);

        // return redirect()->away($finalUrl);

        return response()->view('click-redirect', [
            'targetUrl' => $finalUrl, // URL gốc của click
            'currentClickUrl' => $currentClickUrl, // URL hiện tại của click
        ]);
    }

    private function appendQueryParam(string $url, string $key, string|int $value): string
    {
        $separator = str_contains($url, '?') ? '&' : '?';

        return $url . $separator . urlencode($key) . '=' . urlencode((string) $value);
    }

    private function detectBrowser(?string $userAgent): ?string
    {
        $ua = strtolower((string) $userAgent);

        return match (true) {
            str_contains($ua, 'edg') => 'Edge',
            str_contains($ua, 'chrome') && !str_contains($ua, 'edg') => 'Chrome',
            str_contains($ua, 'firefox') => 'Firefox',
            str_contains($ua, 'safari') && !str_contains($ua, 'chrome') => 'Safari',
            str_contains($ua, 'opera') || str_contains($ua, 'opr/') => 'Opera',
            default => 'Unknown',
        };
    }

    private function detectOperatingSystem(?string $userAgent): ?string
    {
        $ua = strtolower((string) $userAgent);

        return match (true) {
            str_contains($ua, 'windows') => 'Windows',
            str_contains($ua, 'mac os') || str_contains($ua, 'macintosh') => 'macOS',
            str_contains($ua, 'android') => 'Android',
            str_contains($ua, 'iphone') || str_contains($ua, 'ipad') || str_contains($ua, 'ios') => 'iOS',
            str_contains($ua, 'linux') => 'Linux',
            default => 'Unknown',
        };
    }

    private function detectDeviceType(?string $userAgent): ?string
    {
        $ua = strtolower((string) $userAgent);

        return match (true) {
            str_contains($ua, 'tablet') || str_contains($ua, 'ipad') => 'Tablet',
            str_contains($ua, 'mobi') || str_contains($ua, 'android') || str_contains($ua, 'iphone') => 'Mobile',
            default => 'Desktop',
        };
    }

    private function detectDeviceManufacturer(?string $userAgent): ?string
    {
        $ua = strtolower((string) $userAgent);

        return match (true) {
            str_contains($ua, 'iphone') || str_contains($ua, 'ipad') || str_contains($ua, 'macintosh') => 'Apple',
            str_contains($ua, 'samsung') => 'Samsung',
            str_contains($ua, 'huawei') => 'Huawei',
            str_contains($ua, 'xiaomi') => 'Xiaomi',
            str_contains($ua, 'oppo') => 'OPPO',
            str_contains($ua, 'vivo') => 'Vivo',
            default => 'Unknown',
        };
    }


        /**
     * Build tracking follow string from network template.
     *
     * Supported behaviors:
     * 1. Explicit mode:
     *    If template contains {clickid} or #clickid#, replace it in-place.
     *
     * 2. Legacy append mode:
     *    If template does not contain clickid placeholder, append clickid at the end.
     */
    private function buildAffSub(string $template, array $payload): string
    {
        $template = trim($template);

        if ($template === '') {
            return '';
        }

        $clickId = (string) ($payload['click_id'] ?? '');
        $pubid = (string) ($payload['pubid'] ?? '');
        $s3 = (string) ($payload['s3'] ?? '');
        $s4 = (string) ($payload['s4'] ?? '');

        $hasExplicitClickId =
            str_contains($template, '{clickid}') ||
            str_contains($template, '#clickid#');

        $result = strtr($template, [
            '{clickid}' => rawurlencode($clickId),
            '#clickid#' => rawurlencode($clickId),

            '{pubid}' => rawurlencode($pubid),
            '#pubid#' => rawurlencode($pubid),

            '{s3}' => rawurlencode($s3),
            '#s3#' => rawurlencode($s3),

            '{s4}' => rawurlencode($s4),
            '#s4#' => rawurlencode($s4),
        ]);

        if (! $hasExplicitClickId) {
            $result .= rawurlencode($clickId);
        }

        return $result;
    }

    /**
     * Safely append affsub/query tail into target URL.
     */
    private function appendAffSubToUrl(string $url, string $affSub): string
    {
        if ($affSub === '') {
            return $url;
        }

        if (str_contains($url, '?')) {
            if (preg_match('/[?&]$/', $url)) {
                return $url . ltrim($affSub, '&');
            }

            return $url . (str_starts_with($affSub, '&') ? $affSub : '&' . ltrim($affSub, '&'));
        }

        return rtrim($url, '/') . '?' . ltrim($affSub, '&');
    }

    
}