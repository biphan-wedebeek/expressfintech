<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FintechContact extends Model
{
    protected $table = 'fintech_contact';

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'category_id',
        'sub_category_id',
        'message',
        'honeypot_field',
        'submitted_at_js',
        'ip_address',
        'user_agent',
        'status',
    ];

    protected $casts = [
        'submitted_at_js' => 'integer',
        'created_at'      => 'datetime',
        'updated_at'      => 'datetime',
    ];

    // ── Relations ──────────────────────────────────────────────
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    // ── Scopes ─────────────────────────────────────────────────
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeSpam($query)
    {
        return $query->where('status', 'spam');
    }

    // ── Helpers ────────────────────────────────────────────────
    public function getStatusBadgeAttribute(): string
    {
        return match ($this->status) {
            'new'     => 'warning',
            'read'    => 'info',
            'replied' => 'success',
            'spam'    => 'danger',
            default   => 'secondary',
        };
    }
}