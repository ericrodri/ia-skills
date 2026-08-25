<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Los 8 primeros caracteres del token en claro: sirven para que el
            // usuario reconozca cuál tiene activo sin poder reconstruirlo.
            $table->string('api_token_prefix', 8)->nullable()->after('api_token');
            $table->timestamp('api_token_last_used_at')->nullable()->after('api_token_prefix');
        });

        // Los tokens existentes están en claro: se guarda su prefijo y se
        // sustituyen por su hash, para que las integraciones ya activas sigan
        // funcionando con la misma clave.
        DB::table('users')
            ->whereNotNull('api_token')
            ->orderBy('id')
            ->chunkById(100, function ($users) {
                foreach ($users as $user) {
                    DB::table('users')->where('id', $user->id)->update([
                        'api_token_prefix' => substr($user->api_token, 0, 8),
                        'api_token' => hash('sha256', $user->api_token),
                    ]);
                }
            });
    }

    public function down(): void
    {
        // Un hash no se puede revertir a su token original: se revocan todos
        // para no dejar en la columna valores que nunca autenticarán.
        DB::table('users')->whereNotNull('api_token')->update(['api_token' => null]);

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['api_token_prefix', 'api_token_last_used_at']);
        });
    }
};
