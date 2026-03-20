<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Affiliate;
use App\Models\Tracklink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClickTrackingController extends Controller
{
    public function handle(Request $request): RedirectResponse
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
            'affiliate_id'     => $affiliate->id,
            'sub1'             => $request->query('sub1'),
            'sub2'             => $request->query('sub2'),
            'flead'             => 0,
            'status'            => 1,
            'user_agent'        => substr((string) $request->userAgent(), 0, 1000),
            'browser'           => $this->detectBrowser($request->userAgent()),
            'operating_system'  => $this->detectOperatingSystem($request->userAgent()),
            'device_type'       => $this->detectDeviceType($request->userAgent()),
            'device_manuf'      => $this->detectDeviceManufacturer($request->userAgent()),
            'user_language'     => substr((string) $request->header('Accept-Language'), 0, 255),
            'country'           => null,
            'referrer_url'      => substr((string) $request->headers->get('referer'), 0, 1000),
        ]);

        $clickId = $tracklink->id;

        $finalUrl = $this->appendQueryParam($offer->tracking_url, 'clickid', $clickId);

        return redirect()->away($finalUrl);
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
}