<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use Illuminate\Contracts\View\View;

class OfferController extends Controller
{
    public function index(): View
    {
        // Lấy affiliate Wedebeek
        $affiliate = Affiliate::where('firstname', 'Wedebeek')->first();

        $offers = collect();

        if ($affiliate) {
            $offers = $affiliate->offers()
                ->where('status', 1)
                ->orderByDesc('id')
                ->get()
                ->map(function ($offer) use ($affiliate) {
                    $offer->copy_link = url('/click') 
                        . '?affiliate_id=' . $affiliate->id 
                        . '&offer_id=' . $offer->id;

                    return $offer;
                });
        }

        return view('pages.offer', [
            'offers' => $offers,
            'affiliate' => $affiliate,
        ]);
    }
}