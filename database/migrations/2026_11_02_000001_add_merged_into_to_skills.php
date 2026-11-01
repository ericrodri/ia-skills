<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Fichas fusionadas (App\Support\SkillMerger): la duplicada pasa a estado
 * «merged», apunta a la que se queda y su URL redirige a ella con un 301.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->foreignId('merged_into_id')->nullable()->after('status')->constrained('skills')->nullOnDelete();
        });

        $this->statuses(['draft', 'published', 'rejected', 'merged']);
    }

    public function down(): void
    {
        DB::table('skills')->where('status', 'merged')->update(['status' => 'rejected']);

        Schema::table('skills', function (Blueprint $table) {
            $table->dropConstrainedForeignId('merged_into_id');
        });

        $this->statuses(['draft', 'published', 'rejected']);
    }

    /**
     * En PostgreSQL el enum de Laravel es un varchar con un CHECK: se cambia
     * la restricción a mano. En SQLite (tests) Laravel reconstruye la tabla.
     *
     * @param  array<int, string>  $values
     */
    private function statuses(array $values): void
    {
        if (DB::connection()->getDriverName() === 'pgsql') {
            $list = implode(', ', array_map(fn ($v) => "'{$v}'::character varying", $values));
            DB::statement('ALTER TABLE skills DROP CONSTRAINT IF EXISTS skills_status_check');
            DB::statement("ALTER TABLE skills ADD CONSTRAINT skills_status_check CHECK (status::text = ANY (ARRAY[{$list}]::text[]))");

            return;
        }

        Schema::table('skills', function (Blueprint $table) use ($values) {
            $table->enum('status', $values)->default('published')->change();
        });
    }
};
