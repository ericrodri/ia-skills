<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("CREATE EXTENSION IF NOT EXISTS unaccent");

        // IMMUTABLE wrapper needed for generated columns (unaccent() itself is STABLE)
        DB::statement("
            CREATE OR REPLACE FUNCTION f_unaccent(text) RETURNS text
            LANGUAGE sql IMMUTABLE PARALLEL SAFE STRICT AS
            \$\$ SELECT unaccent('unaccent', \$1) \$\$
        ");

        DB::statement("DROP INDEX IF EXISTS skills_search_vector_gin");
        DB::statement("ALTER TABLE skills DROP COLUMN IF EXISTS search_vector");

        DB::statement("
            ALTER TABLE skills
            ADD COLUMN search_vector tsvector
            GENERATED ALWAYS AS (
                setweight(to_tsvector('simple', f_unaccent(coalesce(title, ''))), 'A') ||
                setweight(to_tsvector('simple', f_unaccent(coalesce(description, ''))), 'B') ||
                setweight(to_tsvector('simple', f_unaccent(coalesce(use_case, ''))), 'C') ||
                setweight(to_tsvector('simple', f_unaccent(coalesce(tool_name, ''))), 'D')
            ) STORED
        ");

        DB::statement("CREATE INDEX skills_search_vector_gin ON skills USING GIN(search_vector)");
    }

    public function down(): void
    {
        DB::statement("DROP INDEX IF EXISTS skills_search_vector_gin");
        DB::statement("ALTER TABLE skills DROP COLUMN IF EXISTS search_vector");
        DB::statement("DROP FUNCTION IF EXISTS f_unaccent(text)");
    }
};
