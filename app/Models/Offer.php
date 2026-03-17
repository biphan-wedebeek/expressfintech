<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'fintech_offers';

    protected $fillable = [
        'advertiser_id',
        'category_id',
        'name',
        'description',
        'logo_url',
        'payout_default',
        'currency',
        'status',
    ];

    protected $casts = [
        'payout_default' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'advertiser_id');
    }

    public function category()
    {
        return $this->belongsTo(OfferCategory::class, 'category_id');
    }

    public function banners()
    {
        return $this->hasMany(OfferBanner::class, 'offer_id');
    }

    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'offer_id');
    }

    public function conversions()
    {
        return $this->hasMany(OfferConversion::class, 'offer_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(PostbackLog::class, 'offer_id');
    }
}