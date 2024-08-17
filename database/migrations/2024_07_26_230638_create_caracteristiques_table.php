<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('caracteristiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caracteristique_it', 250)->collation('utf8_unicode_ci');
            $table->string('caracteristique_fr', 250)->collation('utf8_unicode_ci');
            $table->string('caracteristique_ar', 255)->collation('utf8_unicode_ci');
            $table->string('caracteristique_en', 250)->collation('utf8_unicode_ci');
            $table->dateTime('created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('modified')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->default(1)->comment('1=Active | 0=Inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristiques');
    }
};
