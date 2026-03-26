<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'fintech_banners';

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'placement',
        'title',
        'image_url',
        'description',
        'tracking_url',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'placement' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function tracklinks()
    {
        return $this->hasMany(Tracklink::class, 'banner_id');
    }

    public function postbackLogs()
    {
        return $this->hasMany(PostbackLog::class, 'banner_id');
    }
}