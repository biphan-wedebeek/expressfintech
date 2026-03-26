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
            // Remove old columns
            $table->dropColumn(['sub1', 'sub2']);

            // Add new columns
            $table->string('s1', 255)->nullable()->after('affiliate_id');
            $table->string('s2', 255)->nullable()->after('s1');

            // Add indexes for the new columns
            $table->index('s1');
            $table->index('s2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fintech_tracklinks', function (Blueprint $table) {
            // Remove indexes on the new columns
            $table->dropIndex(['s1']);
            $table->dropIndex(['s2']);

            // Remove new columns
            $table->dropColumn(['s1', 's2']);

            // Add old columns back
            $table->string('sub1')->nullable()->after('affiliate_id');
            $table->string('sub2')->nullable()->after('sub1');
        });
    }
};