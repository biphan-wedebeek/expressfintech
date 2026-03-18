<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostbackLog extends Model
{
    use HasFactory;

    protected $table = 'fintech_postback_logs';

    protected $fillable = [
        'direction',
        'banner_id',
        'tracklink_id',
        'request_url',
        'response',
        'user_id',
    ];

    public function banner()
    {
        return $this->belongsTo(Banner::class, 'banner_id');
    }

    public function tracklink()
    {
        return $this->belongsTo(Tracklink::class, 'tracklink_id');
    }
}