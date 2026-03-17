<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_offer_banners', function (Blueprint $table) {
            $table->id();

            $table->foreignId('offer_id')
                ->constrained('fintech_offers')
                ->cascadeOnDelete();

            $table->string('title')->nullable();
            $table->string('image_url');
            $table->text('alt_text')->nullable();
            $table->text('tracking_url');
            $table->string('click_param_name', 100);
            $table->string('placement', 100)->nullable();
            $table->boolean('is_default')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_offer_banners');
    }
};