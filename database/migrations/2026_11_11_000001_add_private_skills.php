<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Skills privadas: estado «private», que solo ve su autor. Como todos los
 * listados públicos filtran por «published», quedan fuera sin tocarlos.
 *
 * `access_token` es el enlace propio del SKILL.md, para instalarla en Claude
 * Code sin iniciar sesión.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('access_token', 64)->nullable()->after('status');
        });

        $this->statuses(['draft', 'published', 'rejected', 'merged', 'private']);
    }

    public function down(): void
    {
        DB::table('skills')->where('status', 'private')->update(['status' => 'draft']);

        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('access_token');
        });

        $this->statuses(['draft', 'published', 'rejected', 'merged']);
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
