<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            // Veces que alguien se ha llevado el SKILL.md a su máquina, por la
            // web, el CLI o el servidor MCP. A diferencia de vote_score y
            // views_count, arranca en cero para todas: es una señal de uso real
            // y no se siembra.
            $table->unsignedInteger('installs_count')->default(0)->after('saves_count');
            $table->index(['status', 'installs_count']);
        });
    }

    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropIndex(['status', 'installs_count']);
            $table->dropColumn('installs_count');
        });
    }
};
