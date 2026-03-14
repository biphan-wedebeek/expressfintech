<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracklink extends Model
{
    use HasFactory;

    protected $table = 'app_tracklinks';

    protected $fillable = [
        'aff_clickid',
        'aff_id',
        'campaign_id',
        'ip_address',
        'referrer_url',
        'payout',
        'device_type',
        'browser',
        'os',
        'country',
        'user_agent',
        'lead',
        'status',
        'converted_at',
        'source',   
    ];

    protected $casts = [
        'lead' => 'boolean',
        'payout' => 'decimal:2',
        'converted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }
}