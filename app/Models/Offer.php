<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'logo_url',
        'payout_amount',
        'status',
    ];

    protected $casts = [
        'payout_amount' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(OfferCategory::class, 'category_id');
    }

    public function tracklinks()
    {
        return $this->hasMany(AppTracklink::class, 'offer_id');
    }

    public function loanApplications()
    {
        return $this->hasMany(AppLoanApplication::class, 'offer_id');
    }
}