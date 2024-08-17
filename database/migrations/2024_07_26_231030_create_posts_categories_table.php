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
        Schema::create('posts_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_en', 250)->nullable();
            $table->string('category_fr', 250)->nullable();
            $table->string('category_it', 255);
            $table->string('category_ar', 255);
            $table->string('url_en', 250);
            $table->string('url_fr', 250);
            $table->string('url_it', 255);
            $table->string('url_ar', 255);
            $table->tinyInteger('ordre')->unsigned();
            $table->dateTime('created')->default(now());
            $table->dateTime('modified')->default(now());
            $table->tinyInteger('status')->default(1)->comment('1=Active | 0=Inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_categories');
    }
};
