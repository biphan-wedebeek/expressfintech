<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_offer_conversions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('offer_id')
                ->nullable()
                ->constrained('fintech_offers')
                ->nullOnDelete();

            $table->foreignId('tracklink_id')
                ->nullable()
                ->constrained('fintech_tracklinks')
                ->nullOnDelete();

            $table->string('clickid')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->decimal('payout', 12, 2)->default(0);
            $table->decimal('revenue', 12, 2)->nullable();
            $table->string('currency', 10);
            $table->json('raw_payload')->nullable();
            $table->timestamp('postback_received_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_offer_conversions');
    }
};