<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'fintech_managers';

    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
    ];
}