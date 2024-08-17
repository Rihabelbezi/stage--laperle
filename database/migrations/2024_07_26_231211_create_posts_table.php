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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 250);
            $table->string('prenom', 250);
            $table->string('tel', 250);
            $table->string('email', 250);
            $table->string('adresse', 250);
            $table->string('reference', 250)->nullable();
            $table->string('titre', 255);
            $table->text('description');
            $table->string('titre_ar', 255);
            $table->text('description_ar');
            $table->unsignedInteger('id_type');
            $table->unsignedInteger('id_category');
            $table->enum('biens', ['Villa', 'Maisonnette', 'Appartement', 'Residence', 'Duplex', 'Terrain', 'Commerce']);
            $table->string('emplacement', 250);
            $table->unsignedInteger('nbr_pieces')->nullable();
            $table->string('bedrooms', 250);
            $table->string('bathrooms', 250);
            $table->string('surface_habitable', 250);
            $table->string('surface', 250);
            $table->string('prix', 250);
            $table->unsignedInteger('vu')->default(0);
            $table->enum('etat', ['Afficher', 'Masquer', 'Vendu', 'Loué']);
            $table->dateTime('created')->default(now());
            $table->dateTime('modified')->default(now());
            $table->tinyInteger('status')->default(1)->comment('1=Active | 0=Inactive');
            $table->foreign('id_category')->references('id')->on('posts_categories')->onDelete('cascade');
            $table->index('type');
            $table->index('biens');
            $table->index('etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
