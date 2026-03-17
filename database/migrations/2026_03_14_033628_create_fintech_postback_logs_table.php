<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_postback_logs', function (Blueprint $table) {
            $table->id();

            $table->enum('direction', ['incoming_advertiser', 'outgoing_wedebeek']);

            $table->foreignId('advertiser_id')
                ->nullable()
                ->constrained('fintech_advertisers')
                ->nullOnDelete();

            $table->foreignId('offer_id')
                ->nullable()
                ->constrained('fintech_offers')
                ->nullOnDelete();

            $table->foreignId('tracklink_id')
                ->nullable()
                ->constrained('fintech_tracklinks')
                ->nullOnDelete();

            $table->foreignId('conversion_id')
                ->nullable()
                ->constrained('fintech_offer_conversions')
                ->nullOnDelete();

            $table->string('clickid')->nullable();
            $table->text('request_url')->nullable();
            $table->longText('request_payload')->nullable();
            $table->integer('response_code')->nullable();
            $table->longText('response_body')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_postback_logs');
    }
};