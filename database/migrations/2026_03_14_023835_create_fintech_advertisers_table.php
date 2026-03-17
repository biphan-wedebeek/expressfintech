<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_advertisers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 100)->unique();
            $table->string('postback_secret')->nullable();
            $table->string('incoming_postback_click_param_name', 100);
            $table->string('incoming_postback_status_param_name', 100);
            $table->string('incoming_postback_payout_param_name', 100);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_advertisers');
    }
};