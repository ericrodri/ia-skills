<?php

namespace App\Console\Commands;

use App\Mail\WeeklyDigestMail;
use App\Models\NewsletterSubscriber;
use App\Models\User;
use App\Support\WeeklyDigest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Throwable;

/**
 * Resumen semanal para los usuarios suscritos (newsletter_opt_in) y para los
 * suscriptores sin cuenta que han confirmado su email (newsletter_subscribers).
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

        $users = User::query()
            ->where('newsletter_opt_in', true)
            ->whereNotNull('email_verified_at');

        // Suscriptores sin cuenta (doble opt-in confirmado). Si su email ya es
        // de un usuario suscrito, le llega por la vía del usuario: nunca dos veces.
        $subscribers = NewsletterSubscriber::query()
            ->active()
            ->whereNotIn('email', (clone $users)->select('email'));

        $totalUsers = (clone $users)->count();
        $totalSubscribers = (clone $subscribers)->count();

        if ($this->option('dry-run')) {
            $total = $totalUsers + $totalSubscribers;
            $this->info("Dry run: se enviaría a {$total} suscriptores ({$totalUsers} usuarios y {$totalSubscribers} sin cuenta).");

            return self::SUCCESS;
        }

        $sent = 0;
        $failed = 0;

        $send = function ($recipients) use ($digest, &$sent, &$failed) {
            foreach ($recipients as $recipient) {
                try {
                    Mail::to($recipient->email)->send(new WeeklyDigestMail($recipient, $digest));
                    $sent++;
                } catch (Throwable $e) {
                    // Un buzón que rebota no debe cortar el envío al resto.
                    report($e);
                    $failed++;
                }
            }
        };

        $users->chunkById(200, $send);
        $subscribers->chunkById(200, $send);

        $this->info("Enviados: {$sent}. Fallidos: {$failed}.");

        return $failed > 0 && $sent === 0 ? self::FAILURE : self::SUCCESS;
    }
}
