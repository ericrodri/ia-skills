<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Búsquedas del catálogo que no encuentran nada (App\Support\SearchMisses):
 * dicen qué fichas faltan. Contadores diarios por texto buscado, sin datos
 * de nadie.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('search_misses', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->string('term', 80);
            $table->unsignedInteger('hits')->default(0);

            $table->unique(['day', 'term']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_misses');
    }
};
