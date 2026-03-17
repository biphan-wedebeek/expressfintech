<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_offers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('advertiser_id')
                ->nullable()
                ->constrained('fintech_advertisers')
                ->nullOnDelete();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained('fintech_offer_categories')
                ->nullOnDelete();

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('logo_url')->nullable();
            $table->decimal('payout_default', 12, 2);
            $table->string('currency', 10);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_offers');
    }
};