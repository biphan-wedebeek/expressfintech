<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            $table->unsignedBigInteger('affiliate_id')->nullable()->after('banner_id');

            $table->foreign('affiliate_id')
                ->references('id')->on('fintech_affiliates')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            $table->dropForeign(['affiliate_id']);
            $table->dropColumn('affiliate_id');
        });
    }
};
