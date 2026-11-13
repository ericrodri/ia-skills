<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Devuelve a las fichas una fecha de modificación real.
 *
 * Cada visita sumaba views_count con increment(), que también movía
 * updated_at: el 2026-11-14, 6.817 de 6.838 fichas publicadas decían haber
 * cambiado en los últimos 3 días, y eso es lo que veía Google en dateModified
 * y en el lastmod del sitemap. Los contadores ya no tocan la fecha
 * (Skill::bump); aquí se recalcula con lo único fiable que queda: la creación
 * de la ficha o la de su última versión del prompt.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement(<<<'SQL'
            UPDATE skills s
            SET updated_at = GREATEST(
                s.created_at,
                COALESCE((SELECT MAX(v.created_at) FROM skill_versions v WHERE v.skill_id = s.id), s.created_at)
            )
            WHERE s.created_at IS NOT NULL
        SQL);
    }

    public function down(): void
    {
        // Las fechas anteriores no tenían valor: no hay nada que restaurar.
    }
};
