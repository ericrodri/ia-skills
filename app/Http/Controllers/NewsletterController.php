<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterConfirmationMail;
use App\Mail\ProfessionPackMail;
use App\Models\NewsletterSubscriber;
use App\Models\User;
use App\Support\BotGuard;
use App\Support\ProfessionPack;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Throwable;

/**
 * Suscripción y baja del resumen semanal.
 *
 * Alta sin cuenta (formulario de las guías y del pie): doble opt-in. El
 * suscriptor no recibe nada hasta confirmar desde el email, para que nadie
 * pueda apuntar direcciones ajenas. La respuesta es siempre la misma, exista
 * o no el email, para no revelar quién está suscrito.
 *
 * Confirmación y baja: GET muestra un botón y POST ejecuta. No se hace en el
 * GET porque los escáneres de enlaces de Outlook y compañía abren cada URL
 * del email y confirmarían o darían de baja a gente que no lo ha pedido. El
 * POST de baja también es el que usan Gmail y Yahoo para la baja con un clic
 * (List-Unsubscribe-Post), por eso está exento de CSRF: lo protege la firma
 * de la URL.
 */
class NewsletterController extends Controller
{
    /** Días sin reenviar la confirmación a un mismo email pendiente. */
    private const RESEND_DAYS = 3;

    /** Máximo de emails de confirmación al día. Lo normal son menos de diez. */
    private const DAILY_CONFIRMATION_CAP = 60;

    private const SUBSCRIBED_MESSAGE = 'Te hemos enviado un email para confirmar la suscripción. Si no lo ves, revisa la carpeta de spam.';

    public function subscribe(Request $request): RedirectResponse
    {
        // A un bot se le responde como a un alta normal, para que no aprenda
        // a esquivar el filtro, pero no se guarda nada ni se manda ningún email.
        $bot = BotGuard::check($request);

        if ($bot === BotGuard::EXPIRED) {
            return $this->back($request, 'La página llevaba demasiado tiempo abierta. Recárgala e inténtalo de nuevo.', error: true);
        }

        if ($bot !== null) {
            return $this->back($request, self::SUBSCRIBED_MESSAGE);
        }

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'source' => ['nullable', 'string', 'max:120'],
        ], [
            'email.required' => 'Escribe tu email.',
            'email.email' => 'Ese email no parece válido.',
        ]);

        if ($validator->fails()) {
            // Mismo destino que el éxito (con el ancla del formulario en las
            // páginas Blade), para que el error se vea junto al campo.
            return redirect()->to($this->previous($request))->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        $email = Str::lower(trim($data['email']));
        $alreadyGetsIt = User::where('email', $email)->where('newsletter_opt_in', true)->exists();

        $subscriber = NewsletterSubscriber::firstOrNew(['email' => $email]);
        $pack = ProfessionPack::professionFromSource($data['source'] ?? null);

        if ($pack && ($alreadyGetsIt || $subscriber->isActive())) {
            // Ya recibe el resumen: no hay nada que confirmar, se le manda el
            // pack directamente. La respuesta es la misma que en un alta nueva.
            try {
                Mail::to($email)->send(new ProfessionPackMail($pack));
            } catch (Throwable $e) {
                report($e);

                return $this->back($request, 'No hemos podido enviarte el email. Inténtalo de nuevo en unos minutos.', error: true);
            }
        }

        if (! $alreadyGetsIt && ! $subscriber->isActive()) {
            // Quien ya tiene un email de confirmación reciente no recibe otro:
            // los bots repiten la misma dirección y la víctima recibía uno por
            // envío. El tope diario protege la reputación del dominio si aun
            // así se cuela una avalancha.
            if ($this->confirmationRecentlySent($subscriber) || ! $this->underDailyConfirmationCap()) {
                return $this->back($request, self::SUBSCRIBED_MESSAGE);
            }

            // Un pack pedido manda sobre el origen anterior: es lo que se
            // entrega al confirmar.
            $subscriber->source = $pack ? ProfessionPack::source($pack) : ($subscriber->source ?? $data['source'] ?? null);
            $subscriber->confirmed_at = null;
            $subscriber->unsubscribed_at = null;
            $subscriber->save();

            try {
                Mail::to($email)->send(new NewsletterConfirmationMail($subscriber));
            } catch (Throwable $e) {
                report($e);

                return $this->back($request, 'No hemos podido enviarte el email de confirmación. Inténtalo de nuevo en unos minutos.', error: true);
            }
        }

        return $this->back($request, self::SUBSCRIBED_MESSAGE);
    }

    public function confirmSubscription(NewsletterSubscriber $subscriber): View
    {
        return $this->page('confirm', $subscriber->email, done: $subscriber->isActive(), pack: $subscriber->isActive() ? $this->pack($subscriber) : null);
    }

    public function storeConfirmation(NewsletterSubscriber $subscriber): View
    {
        $subscriber->forceFill(['confirmed_at' => now(), 'unsubscribed_at' => null])->save();

        return $this->page('confirm', $subscriber->email, done: true, pack: $this->pack($subscriber));
    }

    /**
     * Profesión y enlace del pack que pidió el suscriptor, si pidió uno.
     *
     * @return array{name: string, url: string}|null
     */
    private function pack(NewsletterSubscriber $subscriber): ?array
    {
        $profession = ProfessionPack::professionFromSource($subscriber->source);

        return $profession ? ['name' => $profession->name, 'url' => ProfessionPack::url($profession)] : null;
    }

    public function confirm(User $user): View
    {
        return $this->page('unsubscribe', $user->email, done: false);
    }

    public function unsubscribe(User $user): View
    {
        $user->forceFill(['newsletter_opt_in' => false])->save();

        return $this->page('unsubscribe', $user->email, done: true);
    }

    public function confirmSubscriberUnsubscribe(NewsletterSubscriber $subscriber): View
    {
        return $this->page('unsubscribe', $subscriber->email, done: $subscriber->unsubscribed_at !== null);
    }

    public function subscriberUnsubscribe(NewsletterSubscriber $subscriber): View
    {
        $subscriber->forceFill(['unsubscribed_at' => now()])->save();

        return $this->page('unsubscribe', $subscriber->email, done: true);
    }

    /**
     * Los formularios viven en páginas Blade (guías) y en el layout de
     * Inertia: a las primeras se vuelve con el ancla del formulario; a
     * Inertia, sin ancla y con el flash que pinta AppLayout.
     */
    private function confirmationRecentlySent(NewsletterSubscriber $subscriber): bool
    {
        return $subscriber->exists
            && $subscriber->confirmed_at === null
            && $subscriber->unsubscribed_at === null
            && $subscriber->updated_at?->gt(now()->subDays(self::RESEND_DAYS));
    }

    private function underDailyConfirmationCap(): bool
    {
        $key = 'newsletter-confirmations:'.now()->toDateString();
        Cache::add($key, 0, now()->endOfDay());

        return Cache::increment($key) <= self::DAILY_CONFIRMATION_CAP;
    }

    private function back(Request $request, string $message, bool $error = false): RedirectResponse
    {
        return redirect()->to($this->previous($request))
            ->with('newsletter_status', $message)
            ->with('newsletter_error', $error)
            ->with($error ? 'error' : 'success', $message);
    }

    private function previous(Request $request): string
    {
        return $request->header('X-Inertia') ? url()->previous() : url()->previous().'#newsletter';
    }

    /**
     * @param  array{name: string, url: string}|null  $pack
     */
    private function page(string $view, string $email, bool $done, ?array $pack = null): View
    {
        Seo::share([
            'title' => $view === 'confirm' ? 'Confirmar suscripción' : 'Baja del resumen semanal',
            'description' => 'Gestiona tu suscripción al resumen semanal de ia-skills.',
            'robots' => 'noindex, nofollow',
        ]);

        return view("newsletter.{$view}", [
            'email' => $email,
            'done' => $done,
            'pack' => $pack,
            'action' => request()->fullUrl(),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
