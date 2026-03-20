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
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            $table->string('sub1')->nullable()->after('affiliate_id');
            $table->string('sub2')->nullable()->after('sub1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracklinks', function (Blueprint $table) {
            $table->dropColumn(['sub1', 'sub2']);
        });
    }
};
