<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Preferencias de email y username obligatorio en la práctica.
     *
     * El perfil público de autor se resuelve por username, pero el registro
     * nunca lo pedía: los usuarios existentes sin él reciben uno derivado de
     * su nombre. Los nuevos lo obtienen al crearse (ver User::booted()).
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Avisos transaccionales: skill aprobada/rechazada, comentarios.
            $table->boolean('notify_by_email')->default(true);
            // El resumen semanal es opt-in explícito: nunca se envía por defecto.
            $table->boolean('newsletter_opt_in')->default(false);
        });

        DB::table('users')->whereNull('username')->orderBy('id')->each(function ($user) {
            $base = Str::slug($user->name) ?: 'usuario';
            $base = Str::limit($base, 24, '');
            $username = $base;
            $suffix = 1;

            while (DB::table('users')->where('username', $username)->exists()) {
                $username = $base.'-'.++$suffix;
            }

            DB::table('users')->where('id', $user->id)->update(['username' => $username]);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['notify_by_email', 'newsletter_opt_in']);
        });
    }
};
