<?php

namespace App\Http\Controllers;

use App\Models\OAuthAuthCode;
use App\Models\OAuthClient;
use App\Models\OAuthToken;
use App\Models\User;
use App\Support\OAuth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Partes del servidor OAuth que habla Claude sin pasar por el navegador:
 * metadatos, registro dinámico, emisión y revocación de tokens. La pantalla
 * de permiso está en OAuthAuthorizeController. Reglas en App\Support\OAuth.
 */
class OAuthServerController extends Controller
{
    /**
     * RFC 9728: quién protege el conector y cómo se pide acceso. El
     * `resource` tiene que coincidir con la dirección que el cliente usa, así
     * que /cuenta tiene sus propios metadatos.
     */
    public function protectedResource(Request $request): JsonResponse
    {
        return $this->json([
            'resource' => str_ends_with($request->path(), 'api/mcp/cuenta') ? route('api.mcp.account') : OAuth::resource(),
            'authorization_servers' => [OAuth::issuer()],
            'scopes_supported' => [OAuth::SCOPE],
            'bearer_methods_supported' => ['header'],
            'resource_name' => 'ia-skills',
            'resource_documentation' => url('/guias/conectar-ia-skills-a-claude'),
        ]);
    }

    /** RFC 8414: dónde están los endpoints y qué admite el servidor. */
    public function authorizationServer(): JsonResponse
    {
        return $this->json([
            'issuer' => OAuth::issuer(),
            'authorization_endpoint' => route('oauth.authorize'),
            'token_endpoint' => route('oauth.token'),
            'registration_endpoint' => route('oauth.register'),
            'revocation_endpoint' => route('oauth.revoke'),
            'scopes_supported' => [OAuth::SCOPE],
            'response_types_supported' => ['code'],
            'response_modes_supported' => ['query'],
            'grant_types_supported' => ['authorization_code', 'refresh_token'],
            'code_challenge_methods_supported' => ['S256'],
            'token_endpoint_auth_methods_supported' => ['none', 'client_secret_post', 'client_secret_basic'],
            'revocation_endpoint_auth_methods_supported' => ['none', 'client_secret_post', 'client_secret_basic'],
            'authorization_response_iss_parameter_supported' => true,
            'service_documentation' => url('/guias/conectar-ia-skills-a-claude'),
        ]);
    }

    /** RFC 7591: Claude se registra solo antes de pedir permiso. */
    public function register(Request $request): JsonResponse
    {
        $uris = $request->input('redirect_uris');

        if (! is_array($uris) || $uris === [] || count($uris) > 10 || ! collect($uris)->every(fn ($uri) => OAuth::redirectUriAllowed($uri))) {
            return $this->error('invalid_redirect_uri', 'redirect_uris debe ser una lista de direcciones https (o http en localhost).', 400);
        }

        $grants = $request->input('grant_types', ['authorization_code', 'refresh_token']);
        if (! is_array($grants) || array_diff($grants, ['authorization_code', 'refresh_token']) !== []) {
            return $this->error('invalid_client_metadata', 'Solo se admiten authorization_code y refresh_token.', 400);
        }

        $method = $request->input('token_endpoint_auth_method', 'none');
        if (! in_array($method, ['none', 'client_secret_post', 'client_secret_basic'], true)) {
            return $this->error('invalid_client_metadata', 'token_endpoint_auth_method no admitido.', 400);
        }

        $name = trim(Str::limit(strip_tags((string) $request->input('client_name', '')), 120, ''));
        $secret = $method === 'none' ? null : Str::random(48);

        $client = OAuthClient::create([
            'client_id' => (string) Str::uuid(),
            'secret_hash' => $secret ? OAuth::hash($secret) : null,
            'name' => $name !== '' ? $name : 'Aplicación sin nombre',
            'redirect_uris' => array_values(array_unique($uris)),
        ]);

        return $this->json(array_filter([
            'client_id' => $client->client_id,
            'client_secret' => $secret,
            'client_secret_expires_at' => $secret ? 0 : null,
            'client_id_issued_at' => $client->created_at->timestamp,
            'client_name' => $client->name,
            'redirect_uris' => $client->redirect_uris,
            'grant_types' => array_values($grants),
            'response_types' => ['code'],
            'token_endpoint_auth_method' => $method,
            'scope' => OAuth::SCOPE,
        ], fn ($value) => $value !== null), 201);
    }

    public function token(Request $request): JsonResponse
    {
        $client = $this->authenticateClient($request);

        if (! $client) {
            return $this->error('invalid_client', 'Cliente desconocido o credenciales incorrectas.', 401);
        }

        return match ($request->input('grant_type')) {
            'authorization_code' => $this->exchangeCode($request, $client),
            'refresh_token' => $this->refresh($request, $client),
            default => $this->error('unsupported_grant_type', 'Solo authorization_code y refresh_token.', 400),
        };
    }

    /** RFC 7009: siempre 200, exista o no el token. */
    public function revoke(Request $request): JsonResponse
    {
        $client = $this->authenticateClient($request);
        $token = (string) $request->input('token', '');

        if ($client && $token !== '') {
            $hash = OAuth::hash($token);
            OAuthToken::where('client_id', $client->id)
                ->where(fn ($q) => $q->where('access_hash', $hash)->orWhere('refresh_hash', $hash))
                ->delete();
        }

        return $this->json([]);
    }

    private function exchangeCode(Request $request, OAuthClient $client): JsonResponse
    {
        $code = OAuthAuthCode::where('code_hash', OAuth::hash((string) $request->input('code', '')))->first();

        if (! $code) {
            return $this->error('invalid_grant', 'Código no válido o ya usado.', 400);
        }

        // De un solo uso: se borra antes de comprobar nada más, así un código
        // robado no sirve aunque el ladrón se adelante con datos incorrectos.
        $code->delete();

        $valid = $code->client_id === $client->id
            && $code->expires_at->isFuture()
            && hash_equals($code->redirect_uri, (string) $request->input('redirect_uri', ''))
            && OAuth::pkceMatches($request->input('code_verifier'), $code->code_challenge)
            && ($request->input('resource') === null || OAuth::resourceAllowed($request->input('resource')));

        if (! $valid) {
            return $this->error('invalid_grant', 'El código no corresponde a esta petición o ha caducado.', 400);
        }

        $user = User::find($code->user_id);

        if (! $user) {
            return $this->error('invalid_grant', 'La cuenta ya no existe.', 400);
        }

        return $this->json(OAuth::issueTokens($client, $user, $code->scope, $code->resource));
    }

    private function refresh(Request $request, OAuthClient $client): JsonResponse
    {
        $row = OAuthToken::with('user')
            ->where('refresh_hash', OAuth::hash((string) $request->input('refresh_token', '')))
            ->where('client_id', $client->id)
            ->where('refresh_expires_at', '>', now())
            ->first();

        if (! $row || ! $row->user) {
            return $this->error('invalid_grant', 'Token de renovación no válido o caducado.', 400);
        }

        // Rotación: el par usado deja de valer.
        $row->delete();

        return $this->json(OAuth::issueTokens($client, $row->user, $row->scope, $row->resource));
    }

    /**
     * client_id en el cuerpo o en Basic. Si el cliente tiene secreto, tiene
     * que venir y coincidir; los públicos (Claude) se apoyan en PKCE.
     */
    private function authenticateClient(Request $request): ?OAuthClient
    {
        $id = $request->getUser() ?: $request->input('client_id');
        $secret = $request->getPassword() ?: $request->input('client_secret');

        if (! is_string($id) || $id === '') {
            return null;
        }

        $client = OAuthClient::where('client_id', rawurldecode($id))->first();

        if (! $client) {
            return null;
        }

        if ($client->secret_hash !== null) {
            return is_string($secret) && hash_equals($client->secret_hash, OAuth::hash(rawurldecode($secret))) ? $client : null;
        }

        return $client;
    }

    private function json(array $data, int $status = 200): JsonResponse
    {
        return response()->json($data === [] ? new \stdClass : $data, $status, ['Cache-Control' => 'no-store', 'Pragma' => 'no-cache']);
    }

    private function error(string $code, string $description, int $status): JsonResponse
    {
        return $this->json(['error' => $code, 'error_description' => $description], $status);
    }
}
