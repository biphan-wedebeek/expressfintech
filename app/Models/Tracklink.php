<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracklink extends Model
{
    use HasFactory;

    protected $table = 'fintech_tracklinks';

    protected $fillable = [
        'user_id',
        'banner_id',
        'banner_name',
        'offer_id',
        'affiliate_id',
        's1', // affsource
        's2', // affclickid
        'ip_address',
        'flead',
        'status',
        'amount',
        'sale_amount',
        'user_agent',
        'browser',
        'operating_system',
        'device_type',
        'device_manuf',
        'user_language',
        'country',
        'referrer_url',
    ];

    protected $casts = [
        'flead' => 'integer',
        'status' => 'integer',
        'amount' => 'decimal:2',
        'sale_amount' => 'decimal:2',
    ];

    public function banner()
    {
        return $this->belongsTo(Banner::class, 'banner_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(PostbackLog::class, 'tracklink_id');
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class, 'affiliate_id');
    }
}