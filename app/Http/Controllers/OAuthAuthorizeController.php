<?php

namespace App\Http\Controllers;

use App\Models\OAuthAuthCode;
use App\Models\OAuthClient;
use App\Support\OAuth;
use App\Support\Seo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Pantalla de permiso del OAuth: «Claude quiere leer tus skills».
 *
 * Exige sesión (si no la hay, el login devuelve aquí). Los errores que no
 * permiten confiar en la dirección de vuelta (cliente o redirect_uri
 * desconocidos) se muestran aquí mismo; los demás vuelven a la aplicación
 * con `error`, como pide OAuth.
 */
class OAuthAuthorizeController extends Controller
{
    public function show(Request $request): View|RedirectResponse
    {
        $checked = $this->check($request);

        if ($checked instanceof View || $checked instanceof RedirectResponse) {
            return $checked;
        }

        return view('oauth.authorize', [
            'client' => $checked,
            'redirectHost' => parse_url($request->query('redirect_uri'), PHP_URL_HOST),
            'params' => $request->only(['response_type', 'client_id', 'redirect_uri', 'state', 'scope', 'code_challenge', 'code_challenge_method', 'resource']),
            'footerProfessions' => [],
        ]);
    }

    public function decide(Request $request): View|RedirectResponse
    {
        $checked = $this->check($request);

        if ($checked instanceof View || $checked instanceof RedirectResponse) {
            return $checked;
        }

        if ($request->input('decision') !== 'approve') {
            return $this->back($request, ['error' => 'access_denied', 'error_description' => 'La persona no ha dado permiso.']);
        }

        $code = Str::random(64);

        OAuthAuthCode::create([
            'code_hash' => OAuth::hash($code),
            'client_id' => $checked->id,
            'user_id' => $request->user()->id,
            'redirect_uri' => $request->input('redirect_uri'),
            'code_challenge' => $request->input('code_challenge'),
            'scope' => OAuth::SCOPE,
            'resource' => $request->filled('resource') ? rtrim($request->input('resource'), '/') : null,
            'expires_at' => now()->addSeconds(OAuth::CODE_TTL_SECONDS),
        ]);

        return $this->back($request, ['code' => $code]);
    }

    /**
     * Valida la petición (llega igual por GET y por POST).
     */
    private function check(Request $request): OAuthClient|View|RedirectResponse
    {
        Seo::share(['title' => 'Conectar con ia-skills', 'robots' => 'noindex, nofollow']);

        $client = OAuthClient::where('client_id', (string) $request->input('client_id'))->first();

        if (! $client || ! OAuth::redirectUriRegistered($client, $request->input('redirect_uri'))) {
            return view('oauth.error', [
                'message' => 'La aplicación que te ha enviado aquí no está registrada o ha pedido volver a una dirección que no es la suya. Vuelve a Claude e inténtalo de nuevo; si se repite, quita el conector y añádelo otra vez.',
                'footerProfessions' => [],
            ]);
        }

        $error = match (true) {
            $request->input('response_type') !== 'code' => ['unsupported_response_type', 'Solo se admite response_type=code.'],
            ! is_string($request->input('code_challenge')) || ! preg_match('/^[A-Za-z0-9\-_]{43,128}$/', $request->input('code_challenge')) => ['invalid_request', 'Falta code_challenge (PKCE).'],
            $request->input('code_challenge_method') !== 'S256' => ['invalid_request', 'code_challenge_method tiene que ser S256.'],
            ! OAuth::scopeAllowed($request->input('scope')) => ['invalid_scope', 'Solo se admite el permiso '.OAuth::SCOPE.'.'],
            ! OAuth::resourceAllowed($request->input('resource')) => ['invalid_target', 'Este servidor solo protege '.OAuth::resource().'.'],
            default => null,
        };

        if ($error) {
            return $this->back($request, ['error' => $error[0], 'error_description' => $error[1]]);
        }

        return $client;
    }

    /**
     * Vuelve a la aplicación con el resultado, el `state` que trajo y el
     * emisor (RFC 9207, contra la confusión entre servidores).
     */
    private function back(Request $request, array $params): RedirectResponse
    {
        $uri = (string) $request->input('redirect_uri');
        $params += array_filter(['state' => $request->input('state'), 'iss' => OAuth::issuer()], fn ($v) => $v !== null && $v !== '');

        return redirect()->away($uri.(str_contains($uri, '?') ? '&' : '?').http_build_query($params));
    }
}
