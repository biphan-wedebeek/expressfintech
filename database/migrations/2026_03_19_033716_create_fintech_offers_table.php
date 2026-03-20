<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fintech_offers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('network_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();

            $table->string('title')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();

            $table->boolean('api_on')->default(true);
            $table->text('tracking_url')->nullable();

            $table->integer('click')->default(0);
            $table->integer('lead')->default(0);

            $table->boolean('status')->default(true);

            $table->timestamps();

            // FK
            $table->foreign('network_id')
                ->references('id')->on('fintech_networks')
                ->cascadeOnDelete();

            $table->foreign('category_id')
                ->references('id')->on('fintech_categories')
                ->nullOnDelete();

            $table->foreign('sub_category_id')
                ->references('id')->on('fintech_sub_categories')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_offers');
    }
};