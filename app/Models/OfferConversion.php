<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferConversion extends Model
{
    use HasFactory;

    protected $table = 'fintech_offer_conversions';

    protected $fillable = [
        'offer_id',
        'tracklink_id',
        'clickid',
        'status',
        'payout',
        'revenue',
        'currency',
        'raw_payload',
        'postback_received_at',
    ];

    protected $casts = [
        'payout' => 'decimal:2',
        'revenue' => 'decimal:2',
        'raw_payload' => 'array',
        'postback_received_at' => 'datetime',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }

    public function tracklink()
    {
        return $this->belongsTo(Tracklink::class, 'tracklink_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(PostbackLog::class, 'conversion_id');
    }
}