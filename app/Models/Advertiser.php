<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;

    protected $table = 'fintech_advertisers';

    protected $fillable = [
        'name',
        'code',
        'postback_secret',
        'incoming_postback_click_param_name',
        'incoming_postback_status_param_name',
        'incoming_postback_payout_param_name',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function offers()
    {
        return $this->hasMany(FintechOffer::class, 'advertiser_id');
    }

    public function tracklinks()
    {
        return $this->hasMany(FintechTracklink::class, 'advertiser_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(FintechPostbackLog::class, 'advertiser_id');
    }
}