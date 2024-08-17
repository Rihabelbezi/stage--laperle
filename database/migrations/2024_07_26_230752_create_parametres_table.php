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
        Schema::create('parametres', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titre');
            $table->text('description');
            $table->text('description_courte');
            $table->string('tel', 250);
            $table->string('fax', 250);
            $table->string('email', 250);
            $table->string('adresse', 250);
            $table->string('google_maps', 250);
            $table->string('facebook', 250);
            $table->string('twitter', 250);
            $table->string('google_plus', 250);
            $table->string('youtube', 250);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres');
    }
};
