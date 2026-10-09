<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Cuentas de producción identificadas como bots (nombre aleatorio con
     * mayúsculas alternas, Gmail con puntos, cero actividad) más la 31, que
     * figura como autora de 3.276 skills de los seeders y no debe poder
     * editarlas sin verificar antes su correo.
     */
    private const EXCLUDED_IDS = [
        2, 3, 4, 5, 7, 8, 12, 13, 14, 17, 22, 24, 25, 26, 27, 30, 31, 33, 35, 38, 40,
    ];

    public function up(): void
    {
        // Hasta ahora la verificación de correo no estaba activa, así que nadie
        // pudo verificar. Se da por verificados a los usuarios reales que ya
        // existían para que activarla no les bloquee nada.
        DB::table('users')
            ->whereNull('email_verified_at')
            ->whereNotIn('id', self::EXCLUDED_IDS)
            ->where('created_at', '<', '2026-10-10 00:00:00')
            ->update(['email_verified_at' => DB::raw('created_at')]);
    }

    public function down(): void
    {
        // No se puede distinguir a quién marcó esta migración de quién verificó
        // después por su cuenta: no se revierte.
    }
};
