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
        Schema::create('users1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->collation('utf8_unicode_ci');
            $table->string('email', 100)->collation('utf8_unicode_ci');
            $table->string('password', 255)->collation('utf8_unicode_ci');
            $table->enum('gender', ['Male', 'Female'])->collation('utf8_unicode_ci');
            $table->string('phone', 15)->collation('utf8_unicode_ci');
            $table->dateTime('created');
            $table->dateTime('modified');
            $table->enum('status', ['1', '0'])->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users1');
    }
};
