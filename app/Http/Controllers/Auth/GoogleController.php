<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Support\PendingSave;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirect;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Throwable;

/**
 * Entrar o crear la cuenta con Google. Dos de cada tres cuentas son de Gmail
 * y solo una de cada cuatro altas confirmaba el email (noviembre de 2026):
 * con Google el email ya viene verificado.
 *
 * Solo se activa si GOOGLE_CLIENT_ID y GOOGLE_CLIENT_SECRET están en el .env.
 */
class GoogleController extends Controller
{
    public static function enabled(): bool
    {
        return filled(config('services.google.client_id')) && filled(config('services.google.client_secret'));
    }

    public function redirect(Request $request): SymfonyRedirect|RedirectResponse
    {
        abort_unless(self::enabled(), 404);

        // ?guardar={slug}: el botón de Google del formulario de una ficha.
        PendingSave::remember($request, $request->query('guardar'));

        return Socialite::driver('google')->scopes(['openid', 'email', 'profile'])->redirect();
    }

    public function callback(Request $request): RedirectResponse|SymfonyResponse
    {
        abort_unless(self::enabled(), 404);

        try {
            $google = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            // Cancelar en la pantalla de Google, o volver con un state caducado.
            Log::info('google-login: '.class_basename($e).' '.Str::limit($e->getMessage(), 120));

            return redirect()->route('login')->with('error', 'No se ha podido entrar con Google. Inténtalo de nuevo.');
        }

        $email = Str::lower((string) $google->getEmail());
        $verified = ($google->user['email_verified'] ?? $google->user['verified_email'] ?? false) === true;

        if ($email === '' || ! $verified) {
            return redirect()->route('login')->with('error', 'Tu cuenta de Google no tiene un email verificado. Regístrate con tu email.');
        }

        $user = User::query()->where('google_id', $google->getId())->first()
            ?? User::query()->where('email', $email)->first();

        $isNew = $user === null;

        if ($isNew) {
            $user = User::create([
                'name' => Str::limit($google->getName() ?: Str::before($email, '@'), 255, ''),
                'email' => $email,
                // No la sabe nadie: si un día quiere entrar con contraseña, usa «¿Olvidaste tu contraseña?».
                'password' => Hash::make(Str::random(40)),
            ]);
        }

        // Google ya ha comprobado que el email es suyo.
        $user->forceFill([
            'google_id' => $google->getId(),
            'email_verified_at' => $user->email_verified_at ?? now(),
        ])->save();

        if ($isNew) {
            event(new Registered($user));
        }

        Auth::login($user, remember: true);
        $request->session()->regenerate();

        PendingSave::apply($request, $user, 'google_guardar');

        return AuthenticatedSessionController::toIntended(route('skills.saved', absolute: false));
    }
}
