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
        Schema::create('posts_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image', 250);
            $table->string('alt', 250)->nullable();
            $table->unsignedBigInteger('id_post');
            $table->unsignedInteger('priority');
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_images');
    }
};
