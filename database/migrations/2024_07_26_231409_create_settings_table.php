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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitelogo', 128)->nullable();
            $table->string('sitetitle', 256)->nullable();
            $table->string('description', 512)->nullable();
            $table->string('copyright', 128)->nullable();
            $table->string('contact', 128)->nullable();
            $table->string('currency', 128)->nullable();
            $table->string('symbol', 64)->nullable();
            $table->string('system_email', 128)->nullable();
            $table->string('address', 256)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
