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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->longtext('nome');
            $table->longtext('sobrenome');
            $table->longtext('email')->unique();
            $table->longtext('senha');
            $table->integer('idade');
            $table->longtext('escola');
            $table->longtext('serie');
            $table->longtext('perfil');
            $table->longtext('situacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
