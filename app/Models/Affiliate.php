<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $table = 'fintech_affiliates';
    protected $fillable = [
        'firstname',
        'lastname',
        'avatar_url',
        'email',
        'phone',
        'website',
        'postback_url',
        'click_param_name',
        'status',
    ];


    public function getFullNameAttribute(): string
    {
        return trim("{$this->firstname} {$this->lastname}");
    }
    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'affiliate_id');
    }

    public function offers()
    {
        return $this->belongsToMany(
            \App\Models\Offer::class,
            'fintech_affiliate_offer',
            'affiliate_id',
            'offer_id'
        )->withTimestamps();
    }

    protected static function booted(): void
    {
        static::created(function (Affiliate $affiliate) {
            $offerIds = Offer::query()->pluck('id');

            if ($offerIds->isNotEmpty()) {
                $affiliate->offers()->syncWithoutDetaching($offerIds->all());
            }
        });
    }
}