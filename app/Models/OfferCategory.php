<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class OfferCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class, 'category_id');
    }
}