<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Qué hace la gente en una ficha (App\Support\SkillActions): copiar el
 * prompt, abrirlo en una IA, adaptarlo o instalarlo. Contadores diarios por
 * ficha y acción, sin datos de nadie.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skill_actions', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->string('action', 20);
            $table->unsignedInteger('hits')->default(0);

            $table->unique(['day', 'skill_id', 'action']);
            $table->index(['day', 'action']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skill_actions');
    }
};
