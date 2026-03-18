<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_banners', function (Blueprint $table) {
            $table->id();

            $table->foreignId('network_id')
                ->constrained('fintech_networks')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained('fintech_categories')
                ->cascadeOnDelete();

            $table->foreignId('sub_category_id')
                ->constrained('fintech_sub_categories')
                ->cascadeOnDelete();

            $table->tinyInteger('placement')->default(1);
            $table->string('title')->nullable();
            $table->string('image_url');
            $table->text('description')->nullable();
            $table->text('tracking_url');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_banners');
    }
};