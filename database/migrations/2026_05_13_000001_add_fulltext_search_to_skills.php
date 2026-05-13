<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Generated tsvector column with weighted fields:
        // A = title (highest), B = description, C = use_case, D = tool_name
        DB::statement("
            ALTER TABLE skills
            ADD COLUMN IF NOT EXISTS search_vector tsvector
            GENERATED ALWAYS AS (
                setweight(to_tsvector('simple', coalesce(title, '')), 'A') ||
                setweight(to_tsvector('simple', coalesce(description, '')), 'B') ||
                setweight(to_tsvector('simple', coalesce(use_case, '')), 'C') ||
                setweight(to_tsvector('simple', coalesce(tool_name, '')), 'D')
            ) STORED
        ");

        DB::statement("
            CREATE INDEX IF NOT EXISTS skills_search_vector_gin
            ON skills USING GIN(search_vector)
        ");
    }

    public function down(): void
    {
        DB::statement("DROP INDEX IF EXISTS skills_search_vector_gin");
        DB::statement("ALTER TABLE skills DROP COLUMN IF EXISTS search_vector");
    }
};
