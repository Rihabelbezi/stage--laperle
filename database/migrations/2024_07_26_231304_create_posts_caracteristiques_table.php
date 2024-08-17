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
        Schema::create('posts_caracteristiques', function (Blueprint $table) {
            $table->unsignedInteger('id_caracteristique');
            $table->unsignedInteger('id_post');
            $table->unsignedInteger('priority');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_caracteristiques');
    }
};
