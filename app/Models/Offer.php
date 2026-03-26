<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'fintech_offers';

    protected $fillable = [
        'network_id',
        'banner_id',
        'title',
        'image_url',
        'description',
        'api_on',
        'tracking_url',
        'click',
        'lead',
        'status',
    ];

    protected $casts = [
        'api_on' => 'boolean',
        'status' => 'boolean',
    ];

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }

    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'offer_id');
    }

    public function affiliates()
    {
        return $this->belongsToMany(
            \App\Models\Affiliate::class,
            'fintech_affiliate_offer',
            'offer_id',
            'affiliate_id'
        )->withTimestamps();
    }

    protected static function booted(): void
    {
        static::created(function (Offer $offer) {
            $affiliateIds = Affiliate::query()->pluck('id');

            if ($affiliateIds->isNotEmpty()) {
                $offer->affiliates()->syncWithoutDetaching($affiliateIds->all());
            }
        });
    }
}