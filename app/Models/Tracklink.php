<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracklink extends Model
{
    use HasFactory;

    protected $table = 'fintech_tracklinks';

    protected $fillable = [
        'aff_clickid',
        'offer_id',
        'banner_id',
        'advertiser_id',
        'aff_id',
        'source',
        'pubid',
        'sub1',
        'sub2',
        'sub3',
        'sub4',
        'ip_address',
        'referrer_url',
        'device_type',
        'browser',
        'os',
        'country',
        'user_agent',
        'status',
        'payout',
        'converted_at',
        'clicked_at',
    ];

    protected $casts = [
        'payout' => 'decimal:2',
        'converted_at' => 'datetime',
        'clicked_at' => 'datetime',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }

    public function banner()
    {
        return $this->belongsTo(OfferBanner::class, 'banner_id');
    }

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'advertiser_id');
    }

    public function conversions()
    {
        return $this->hasMany(OfferConversion::class, 'tracklink_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(PostbackLog::class, 'tracklink_id');
    }
}