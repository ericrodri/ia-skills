<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Uso de ia-skills por asistentes, agentes y rastreadores de IA
 * (App\Support\AiUsage). Contadores diarios agregados: una fila por día,
 * agente, tipo de recurso y, solo para los asistentes, página leída.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_hits', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->string('agent', 40);
            $table->string('grp', 12);
            $table->string('kind', 12);
            $table->string('path', 255)->default('');
            $table->unsignedInteger('hits')->default(0);

            $table->unique(['day', 'agent', 'kind', 'path']);
            $table->index(['day', 'grp']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_hits');
    }
};
