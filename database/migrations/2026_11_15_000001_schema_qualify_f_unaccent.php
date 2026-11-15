<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * f_unaccent llamaba a unaccent() sin esquema. pg_dump restaura con un
 * search_path vacío, así que al recrear la columna generada skills.search_vector
 * la función no se encontraba y la tabla skills entera no se restauraba
 * (detectado al probar la primera copia de seguridad, 15-11-2026). Con el
 * esquema escrito el resultado es idéntico y la copia se restaura completa.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement("
            CREATE OR REPLACE FUNCTION public.f_unaccent(text) RETURNS text
            LANGUAGE sql IMMUTABLE PARALLEL SAFE STRICT AS
            \$\$ SELECT public.unaccent('public.unaccent'::regdictionary, \$1) \$\$
        ");
    }

    public function down(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement("
            CREATE OR REPLACE FUNCTION public.f_unaccent(text) RETURNS text
            LANGUAGE sql IMMUTABLE PARALLEL SAFE STRICT AS
            \$\$ SELECT unaccent('unaccent', \$1) \$\$
        ");
    }
};
