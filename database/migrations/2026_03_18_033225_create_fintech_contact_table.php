<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fintech_contact', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Trường bắt buộc
            $table->string('full_name', 150);
            $table->string('email', 255);
            $table->string('phone_number', 20);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->text('message');

            // Chống spam / bảo mật
            $table->string('honeypot_field')->nullable();   // bẫy robot
            $table->bigInteger('submitted_at_js')->nullable(); // thời gian load form
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();

            // Trạng thái xử lý
            $table->enum('status', ['new', 'read', 'replied', 'spam'])->default('new');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();

            // Foreign keys — khớp BIGINT với bảng sẵn có
            $table->foreign('category_id')
                ->references('id')
                ->on('fintech_categories')
                ->onDelete('restrict');

            $table->foreign('sub_category_id')
                ->references('id')
                ->on('fintech_sub_categories')
                ->onDelete('set null');

            // Index tăng tốc query
            $table->index('email');
            $table->index('ip_address');
            $table->index('status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fintech_contact');
    }
};
