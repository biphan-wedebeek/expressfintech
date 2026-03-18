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
}