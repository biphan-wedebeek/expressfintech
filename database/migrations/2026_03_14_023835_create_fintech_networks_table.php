<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_networks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fin_pass', 100)->default('xx');
            $table->string('fin_subid')->nullable();
            $table->text('fin_value')->nullable();
            $table->integer('id_postback')->default(0);
            $table->string('fin_link', 255)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_networks');
    }
};