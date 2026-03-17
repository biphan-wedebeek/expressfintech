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

            $table->string('aff_clickid')->unique();

            $table->foreignId('offer_id')
                ->nullable()
                ->constrained('fintech_offers')
                ->nullOnDelete();

            $table->foreignId('banner_id')
                ->nullable()
                ->constrained('fintech_offer_banners')
                ->nullOnDelete();

            $table->foreignId('advertiser_id')
                ->nullable()
                ->constrained('fintech_advertisers')
                ->nullOnDelete();

            $table->unsignedBigInteger('aff_id')->nullable();
            $table->string('source', 100)->nullable();
            $table->string('pubid', 100)->nullable();
            $table->string('sub1')->nullable();
            $table->string('sub2')->nullable();
            $table->string('sub3')->nullable();
            $table->string('sub4')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('referrer_url')->nullable();
            $table->string('device_type', 50)->nullable();
            $table->string('browser', 100)->nullable();
            $table->string('os', 100)->nullable();
            $table->string('country', 10)->nullable();
            $table->text('user_agent')->nullable();
            $table->enum('status', ['clicked', 'pending', 'approved', 'rejected'])->default('clicked');
            $table->decimal('payout', 12, 2)->default(0);
            $table->timestamp('converted_at')->nullable();
            $table->timestamp('clicked_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_tracklinks');
    }
};