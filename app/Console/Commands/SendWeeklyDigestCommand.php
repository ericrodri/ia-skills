<?php

namespace App\Console\Commands;

use App\Mail\WeeklyDigestMail;
use App\Models\User;
use App\Support\WeeklyDigest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Throwable;

/**
 * Resumen semanal para los usuarios suscritos (newsletter_opt_in).
 *
 *   php artisan newsletter:weekly --dry-run        cuenta destinatarios y contenido, no envía
 *   php artisan newsletter:weekly --to=tu@email    envía solo a esa dirección (prueba)
 *   php artisan newsletter:weekly                  envío real
 *
 * Programado los lunes a las 8:00 (Europe/Madrid) en routes/console.php.
 */
class SendWeeklyDigestCommand extends Command
{
    protected $signature = 'newsletter:weekly
        {--dry-run : Muestra qué se enviaría sin enviar nada}
        {--to= : Envía una única copia a este email para revisarla}';

    protected $description = 'Envía el resumen semanal de skills y guías nuevas a los suscriptores';

    public function handle(): int
    {
        $digest = WeeklyDigest::build();

        if (WeeklyDigest::isEmpty($digest)) {
            $this->info('No hay contenido nuevo esta semana: no se envía nada.');

            return self::SUCCESS;
        }

        $this->line(sprintf(
            'Contenido: %d skills nuevas (%d en el email) y %d guías.',
            $digest['total_new'],
            count($digest['skills']),
            count($digest['guides']),
        ));

        if ($to = $this->option('to')) {
            // Si el email no es de ningún usuario, el saludo queda en "Hola,".
            $user = User::where('email', $to)->first() ?? new User(['name' => '', 'email' => $to]);
            // Sin id no se puede firmar el enlace de baja: se usa uno ficticio.
            $user->id ??= 0;

            Mail::to($to)->send(new WeeklyDigestMail($user, $digest));
            $this->info("Enviada una copia de prueba a {$to}.");

            return self::SUCCESS;
        }

        $recipients = User::query()
            ->where('newsletter_opt_in', true)
            ->whereNotNull('email_verified_at');

        $total = (clone $recipients)->count();

        if ($this->option('dry-run')) {
            $this->info("Dry run: se enviaría a {$total} suscriptores.");

            return self::SUCCESS;
        }

        $sent = 0;
        $failed = 0;

        $recipients->orderBy('id')->chunkById(200, function ($users) use ($digest, &$sent, &$failed) {
            foreach ($users as $user) {
                try {
                    Mail::to($user)->send(new WeeklyDigestMail($user, $digest));
                    $sent++;
                } catch (Throwable $e) {
                    // Un buzón que rebota no debe cortar el envío al resto.
                    report($e);
                    $failed++;
                }
            }
        });

        $this->info("Enviados: {$sent}. Fallidos: {$failed}.");

        return $failed > 0 && $sent === 0 ? self::FAILURE : self::SUCCESS;
    }
}
