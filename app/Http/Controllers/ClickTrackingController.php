<?php

namespace App\Http\Controllers;

use App\Models\OfferBanner;
use App\Models\Tracklink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClickTrackingController extends Controller
{
    public function banner(Request $request, OfferBanner $banner)
    {
        $banner->load(['offer.advertiser']);

        $offer = $banner->offer;
        $advertiser = $offer?->advertiser;

        if (! $offer || ! $advertiser) {
            abort(404, 'Offer or advertiser not found.');
        }

        if (! $banner->status || ! $offer->status || ! $advertiser->status) {
            abort(404, 'Banner, offer, or advertiser is inactive.');
        }

        $affClickId = $this->generateClickId();

        Tracklink::create([
            'aff_clickid'   => $affClickId,
            'offer_id'      => $offer->id,
            'banner_id'     => $banner->id,
            'advertiser_id' => $advertiser->id,
            'aff_id'        => null,
            'source'        => $request->query('source'),
            'pubid'         => $request->query('pubid'),
            'sub1'          => $request->query('sub1'),
            'sub2'          => $request->query('sub2'),
            'sub3'          => $request->query('sub3'),
            'sub4'          => $request->query('sub4'),
            'ip_address'    => $request->ip(),
            'referrer_url'  => $request->headers->get('referer'),
            'device_type'   => $this->detectDeviceType($request->userAgent()),
            'browser'       => $this->detectBrowser($request->userAgent()),
            'os'            => $this->detectOs($request->userAgent()),
            'country'       => null,
            'user_agent'    => $request->userAgent(),
            'status'        => 'clicked',
            'payout'        => $offer->payout_default,
            'converted_at'  => null,
            'clicked_at'    => now(),
        ]);

        $redirectUrl = $this->buildRedirectUrl(
            $banner->tracking_url,
            $banner->click_param_name,
            $affClickId
        );

        return redirect()->away($redirectUrl);
    }

    protected function generateClickId(): string
    {
        return 'clk_' . Str::lower(Str::random(24));
    }

    protected function buildRedirectUrl(string $trackingUrl, string $clickParamName, string $affClickId): string
    {
        $separator = str_contains($trackingUrl, '?') ? '&' : '?';

        return $trackingUrl . $separator . urlencode($clickParamName) . '=' . urlencode($affClickId);
    }

    protected function detectDeviceType(?string $userAgent): ?string
    {
        if (! $userAgent) {
            return null;
        }

        $ua = strtolower($userAgent);

        if (str_contains($ua, 'mobile') || str_contains($ua, 'android') || str_contains($ua, 'iphone')) {
            return 'mobile';
        }

        if (str_contains($ua, 'ipad') || str_contains($ua, 'tablet')) {
            return 'tablet';
        }

        return 'desktop';
    }

    protected function detectBrowser(?string $userAgent): ?string
    {
        if (! $userAgent) {
            return null;
        }

        $ua = strtolower($userAgent);

        return match (true) {
            str_contains($ua, 'edg') => 'Edge',
            str_contains($ua, 'chrome') => 'Chrome',
            str_contains($ua, 'firefox') => 'Firefox',
            str_contains($ua, 'safari') && ! str_contains($ua, 'chrome') => 'Safari',
            str_contains($ua, 'opera') || str_contains($ua, 'opr/') => 'Opera',
            default => 'Unknown',
        };
    }

    protected function detectOs(?string $userAgent): ?string
    {
        if (! $userAgent) {
            return null;
        }

        $ua = strtolower($userAgent);

        return match (true) {
            str_contains($ua, 'windows') => 'Windows',
            str_contains($ua, 'mac os') || str_contains($ua, 'macintosh') => 'macOS',
            str_contains($ua, 'android') => 'Android',
            str_contains($ua, 'iphone') || str_contains($ua, 'ipad') || str_contains($ua, 'ios') => 'iOS',
            str_contains($ua, 'linux') => 'Linux',
            default => 'Unknown',
        };
    }
}