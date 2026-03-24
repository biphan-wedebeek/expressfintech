<?php
// app/Services/BannerService.php

namespace App\Services;

use App\Models\Banner;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Collection;

class BannerService
{
    public function get(string $categoryName, string $subCategoryName, int $placement): Collection
    {
        // Tự động tìm ID từ name
        $category = Category::where('name', $categoryName)
            ->where('status', 1)
            ->first();

        if (!$category) return collect();

        $subCategory = SubCategory::where('name', $subCategoryName)
            ->where('category_id', $category->id)
            ->where('status', 1)
            ->first();

        if (!$subCategory) return collect();

        return Banner::where('status', 1)
            ->where('category_id', $category->id)
            ->where('sub_category_id', $subCategory->id)
            ->where('placement', $placement)
            ->orderBy('id')
            ->get();
    }
}
