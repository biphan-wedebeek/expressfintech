<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferBanner extends Model
{
    use HasFactory;

    protected $table = 'fintech_offer_banners';

    protected $fillable = [
        'offer_id',
        'title',
        'image_url',
        'alt_text',
        'tracking_url',
        'click_param_name',
        'placement',
        'is_default',
        'status',
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'status' => 'boolean',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }

    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'banner_id');
    }
}