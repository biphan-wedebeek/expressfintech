<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            $table->unsignedBigInteger('offer_id')->nullable()->after('banner_id');

            $table->foreign('offer_id')
                ->references('id')->on('fintech_offers')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            $table->dropForeign(['offer_id']);
            $table->dropColumn('offer_id');
        });
    }
};
