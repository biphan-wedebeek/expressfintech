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

            $table->foreignId('banner_id')
                ->nullable()
                ->constrained('fintech_banners')
                ->nullOnDelete();

            $table->foreignId('tracklink_id')
                ->nullable()
                ->constrained('fintech_tracklinks')
                ->nullOnDelete();

            $table->text('request_url')->nullable();
            $table->longText('response')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_postback_logs');
    }
};