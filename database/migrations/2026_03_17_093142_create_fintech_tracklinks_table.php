<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_tracklinks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreignId('banner_id')
                ->nullable()
                ->constrained('fintech_banners')
                ->nullOnDelete();

            $table->string('banner_name')->nullable();
            $table->string('ip_address')->nullable();
            $table->tinyInteger('flead')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->decimal('amount', 12, 2)->nullable();
            $table->decimal('sale_amount', 12, 2)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('browser')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('device_type')->nullable();
            $table->string('device_manuf')->nullable();
            $table->string('user_language')->nullable();
            $table->string('country')->nullable();
            $table->text('referrer_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_tracklinks');
    }
};