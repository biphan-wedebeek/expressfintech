<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fintech_affiliate_offer', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('affiliate_id');
            $table->unsignedBigInteger('offer_id');

            $table->timestamps();

            $table->unique(['affiliate_id', 'offer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fintech_affiliate_offer');
    }
};
