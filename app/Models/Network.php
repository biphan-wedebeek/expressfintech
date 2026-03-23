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
        'fin_value' => 'array',
        'id_postback' => 'integer',
    ];

    public function getFinValueConfigAttribute(): array
    {
        if (blank($this->fin_value)) {
            return [];
        }

        if (is_array($this->fin_value)) {
            return $this->fin_value;
        }

        $decoded = json_decode($this->fin_value, true);

        return is_array($decoded) ? $decoded : [];
    }
}