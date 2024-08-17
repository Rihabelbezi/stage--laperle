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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', false, true)->length(14)->primary();
            $table->string('user_id', 64)->nullable();
            $table->string('full_name', 128)->nullable();
            $table->string('email', 256)->nullable();
            $table->string('password', 512)->nullable();
            $table->string('ip_address', 512)->nullable();
            $table->string('forgotten_code', 512)->nullable();
            $table->string('address', 512)->nullable();
            $table->string('dob', 128)->nullable();
            $table->string('image', 128)->nullable();
            $table->string('contact', 256)->nullable();
            $table->enum('gender', ['MALE', 'FEMALE'])->default('MALE');
            $table->string('country', 128)->nullable();
            $table->string('created_on', 128)->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('INACTIVE');
            $table->enum('user_type', ['User', 'Admin'])->default('User');
            $table->string('confirm_code', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
