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
        Schema::create('members', function (Blueprint $table) {
            $table->char('id', 23)->primary();
            $table->string('username', 65)->default('');
            $table->string('password', 65)->default('');
            $table->string('email', 65);
            $table->tinyInteger('verified')->default(0);
            $table->timestamp('mod_timestamp')->useCurrent()->nullable(false)->change();
            $table->unique('username', 'username_UNIQUE');
            $table->unique('id', 'id_UNIQUE');
            $table->unique('email', 'email_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
