<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterConfirmationMail;
use App\Models\NewsletterSubscriber;
use App\Models\User;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
    private const SUBSCRIBED_MESSAGE = 'Te hemos enviado un email para confirmar la suscripción. Si no lo ves, revisa la carpeta de spam.';

    public function subscribe(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'source' => ['nullable', 'string', 'max:120'],
            // Honeypot: un campo oculto que solo rellenan los bots.
            'website' => ['nullable', 'max:0'],
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

        if (! $alreadyGetsIt && ! $subscriber->isActive()) {
            $subscriber->source ??= $data['source'] ?? null;
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
        return $this->page('confirm', $subscriber->email, done: $subscriber->isActive());
    }

    public function storeConfirmation(NewsletterSubscriber $subscriber): View
    {
        $subscriber->forceFill(['confirmed_at' => now(), 'unsubscribed_at' => null])->save();

        return $this->page('confirm', $subscriber->email, done: true);
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

    private function page(string $view, string $email, bool $done): View
    {
        Seo::share([
            'title' => $view === 'confirm' ? 'Confirmar suscripción' : 'Baja del resumen semanal',
            'description' => 'Gestiona tu suscripción al resumen semanal de ia-skills.',
            'robots' => 'noindex, nofollow',
        ]);

        return view("newsletter.{$view}", [
            'email' => $email,
            'done' => $done,
            'action' => request()->fullUrl(),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
