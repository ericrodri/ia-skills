<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Uso del conector MCP remoto (/api/mcp), en contadores diarios agregados
 * (App\Support\McpUsage). Hasta ahora solo se veía en los logs de nginx, que
 * duran dos semanas y no dicen qué herramienta se usó ni qué se buscó.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mcp_usage', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            // Primera palabra del User-Agent: claude-code, claude-user, curl…
            $table->string('client', 40);
            // anonimo, cuenta o propio (administradores: nosotros).
            $table->string('access', 10);
            // conectar, buscar, leer o mis_skills.
            $table->string('action', 12);
            // Lo buscado o el slug leído; vacío en el resto.
            $table->string('subject', 120)->default('');
            $table->unsignedInteger('hits')->default(0);

            $table->unique(['day', 'client', 'access', 'action', 'subject']);
            $table->index(['day', 'access']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mcp_usage');
    }
};
