<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Analítica propia (App\Support\Analytics): una fila por página vista.
 * Sin IP ni cookies: `visitor` es un resumen de IP y navegador con una sal
 * que se descarta cada día, así que solo sirve para contar únicos del día.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_views', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->string('path', 255);
            $table->string('referrer', 120)->nullable();
            $table->string('utm_source', 60)->nullable();
            $table->char('visitor', 16);
            $table->string('device', 8);
            $table->timestamp('created_at')->useCurrent();

            $table->index('day');
            $table->index(['day', 'path']);
            $table->index(['day', 'visitor']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_views');
    }
};
