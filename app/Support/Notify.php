<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Notifications\Notification;
use Throwable;

/**
 * Envío de avisos por email con dos garantías:
 *
 * 1. Respeta la preferencia `notify_by_email` del destinatario.
 * 2. Un fallo del servidor de correo nunca rompe la acción que lo provoca: si
 *    el SMTP está caído, el admin sigue pudiendo aprobar y el usuario sigue
 *    pudiendo comentar. El error se reporta y la petición continúa.
 *
 * Los avisos se envían en la misma petición (sin cola) porque producción no
 * tiene un worker de colas corriendo: con ShouldQueue se quedarían en la tabla
 * `jobs` sin salir nunca.
 */
class Notify
{
    public static function send(?User $user, Notification $notification): void
    {
        if ($user === null || ! $user->notify_by_email || blank($user->email)) {
            return;
        }

        try {
            $user->notify($notification);
        } catch (Throwable $e) {
            report($e);
        }
    }
}
