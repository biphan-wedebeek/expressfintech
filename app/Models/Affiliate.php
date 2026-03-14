<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $table = 'app_affiliates';
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
        'notes',
    ];

    public function getFullNameAttribute(): string
    {
        return trim("{$this->firstname} {$this->lastname}");
    }

    // Relationship với tracklinks
    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'aff_id', 'id');
    }
}