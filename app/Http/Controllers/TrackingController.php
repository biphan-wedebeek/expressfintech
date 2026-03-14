<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Affiliate;
use App\Models\Tracklink;
use App\Models\LoanApplication;
use Jenssegers\Agent\Agent;

class TrackingController extends Controller
{
    public function index(Request $request)
    {
        $affId = $request->input('aff_id');
        $clickId = $request->input('clickid');
        $offerId = $request->input('offer_id');
        $source = $request->input('source');

        if (!$affId) {
            return view('home');
        }

        $affiliate = Affiliate::find($affId);
        if (!$affiliate || $affiliate->status !== 'active') {
            return abort(403, 'Offer not available');
        }

        if ($clickId) {
            $existingLoan = LoanApplication::whereHas('tracklink', function ($query) use ($affId, $clickId) {
                $query->where('aff_id', $affId)
                    ->where('aff_clickid', $clickId);
            })->exists();

            if ($existingLoan) {
                return redirect('/');
            }

            $existingTracklink = Tracklink::where('aff_id', $affId)
                ->where('aff_clickid', $clickId)
                ->first();

            if ($existingTracklink) {
                Cookie::queue('tracklink_id', $existingTracklink->id, 60 * 24 * 30);
                Cookie::queue('aff_id', $affId, 60 * 24 * 30);
                Cookie::queue('clickid', $clickId, 60 * 24 * 30);

                if ($offerId) {
                    Cookie::queue('offer_id', $offerId, 60 * 24 * 30);
                }

                if ($source) {
                    Cookie::queue('source', $source, 60 * 24 * 30);
                }

                return view('home');
            }
        }

        $tracklink = $this->createTracklink($request, $affId, $clickId, $offerId, $source);

        Cookie::queue('tracklink_id', $tracklink->id, 60 * 24 * 30);
        Cookie::queue('aff_id', $affId, 60 * 24 * 30);

        if ($clickId) {
            Cookie::queue('clickid', $clickId, 60 * 24 * 30);
        }

        if ($offerId) {
            Cookie::queue('offer_id', $offerId, 60 * 24 * 30);
        }

        if ($source) {
            Cookie::queue('source', $source, 60 * 24 * 30);
        }

        return view('home');
    }

    public function form(Request $request)
    {
        $amount = $request->amount;
        return view('form',['homeamount' => $amount]);
    }

    private function createTracklink(Request $request, $affId, $clickId, $offerId = null, $source = null)
    {
        $agent = new Agent();

        $country = null;

        try {
            $geoip = geoip($request->ip());
            $country = $geoip->iso_code;
        } catch (\Exception $e) {
            $country = null;
        }

        return Tracklink::create([
            'aff_id' => $affId,
            'aff_clickid' => $clickId,
            'campaign_id' => $offerId,
            'source' => $source,
            'ip_address' => $request->ip(),
            'referrer_url' => $request->header('referer'),
            'device_type' => $agent->isMobile() ? 'mobile' : ($agent->isTablet() ? 'tablet' : 'desktop'),
            'browser' => $agent->browser(),
            'os' => $agent->platform(),
            'user_agent' => $request->userAgent(),
            'country' => $country,
            'payout' => 0,
            'lead' => 0,
            'status' => 'pending',
        ]);
    }
}