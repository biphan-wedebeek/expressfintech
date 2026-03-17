<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $table = 'fintech_networks';

    protected $fillable = [
        'name',
        'fin_pass',
        'fin_subid',
        'fin_value',
        'id_postback',
        'fin_link',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'id_postback' => 'integer',
    ];
}