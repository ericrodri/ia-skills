<?php

namespace App\Support;

use App\Models\OAuthClient;
use App\Models\OAuthToken;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * Servidor OAuth 2.1 mínimo para el conector MCP de Claude.
 *
 * Lo justo que pide la especificación de autorización de MCP y el
 * directorio de conectores de Anthropic:
 * - Metadatos del recurso (RFC 9728) y del servidor (RFC 8414).
 * - Registro dinámico de clientes (RFC 7591).
 * - Código de autorización con PKCE S256 obligatorio, sin flujo implícito
 *   ni contraseñas.
 * - Tokens opacos: se entregan una vez y solo se guarda su SHA-256. El de
 *   acceso dura una hora; el de renovación, 60 días, y rota en cada uso.
 *
 * Un único permiso, `skills:read`: leer el catálogo y las skills propias,
 * también las privadas. El conector no escribe nada.
 */
class OAuth
{
    public const SCOPE = 'skills:read';

    public const ACCESS_TTL_SECONDS = 3600;

    public const REFRESH_TTL_DAYS = 60;

    public const CODE_TTL_SECONDS = 300;

    public static function issuer(): string
    {
        return rtrim(url('/'), '/');
    }

    /** El recurso protegido: la URL del conector MCP. */
    public static function resource(): string
    {
        return route('api.mcp');
    }

    /**
     * Las dos direcciones del conector que aceptan estos tokens: la general
     * (sin token, catálogo público) y /cuenta, que exige iniciar sesión. Esa
     * existe porque Claude Code solo pide permiso si el servidor responde 401.
     *
     * @return array<int, string>
     */
    public static function resources(): array
    {
        return [route('api.mcp'), route('api.mcp.account')];
    }

    public static function hash(string $token): string
    {
        return hash('sha256', $token);
    }

    /**
     * Direcciones de vuelta admitidas al registrarse: https, o http solo en
     * la propia máquina (Claude Code abre un puerto local, RFC 8252).
     */
    public static function redirectUriAllowed(mixed $uri): bool
    {
        if (! is_string($uri) || strlen($uri) > 2000 || ! filter_var($uri, FILTER_VALIDATE_URL)) {
            return false;
        }

        $parts = parse_url($uri);

        if (isset($parts['fragment'])) {
            return false;
        }

        return match ($parts['scheme'] ?? null) {
            'https' => true,
            'http' => self::isLoopback($parts['host'] ?? ''),
            default => false,
        };
    }

    /**
     * La dirección de la petición tiene que ser una de las registradas, letra
     * por letra. En las locales el puerto puede cambiar en cada uso.
     */
    public static function redirectUriRegistered(OAuthClient $client, mixed $uri): bool
    {
        if (! is_string($uri) || ! self::redirectUriAllowed($uri)) {
            return false;
        }

        foreach ($client->redirect_uris as $registered) {
            if (hash_equals($registered, $uri)) {
                return true;
            }

            if (self::isLoopback(parse_url($uri, PHP_URL_HOST) ?? '') && self::withoutPort($registered) === self::withoutPort($uri)) {
                return true;
            }
        }

        return false;
    }

    public static function pkceMatches(mixed $verifier, string $challenge): bool
    {
        if (! is_string($verifier) || ! preg_match('/^[A-Za-z0-9\-._~]{43,128}$/', $verifier)) {
            return false;
        }

        $computed = rtrim(strtr(base64_encode(hash('sha256', $verifier, true)), '+/', '-_'), '=');

        return hash_equals($challenge, $computed);
    }

    /**
     * El recurso pedido (RFC 8707), si lo hay, tiene que ser este conector.
     */
    public static function resourceAllowed(mixed $resource): bool
    {
        return $resource === null || $resource === '' || in_array(rtrim((string) $resource, '/'), self::resources(), true);
    }

    public static function scopeAllowed(mixed $scope): bool
    {
        if ($scope === null || $scope === '') {
            return true;
        }

        $requested = array_filter(explode(' ', (string) $scope));

        return $requested !== [] && array_diff($requested, [self::SCOPE]) === [];
    }

    /**
     * @return array<string, mixed> la respuesta del endpoint de tokens
     */
    public static function issueTokens(OAuthClient $client, User $user, string $scope, ?string $resource): array
    {
        $access = Str::random(64);
        $refresh = Str::random(64);

        OAuthToken::create([
            'client_id' => $client->id,
            'user_id' => $user->id,
            'access_hash' => self::hash($access),
            'refresh_hash' => self::hash($refresh),
            'scope' => $scope,
            'resource' => $resource,
            'access_expires_at' => now()->addSeconds(self::ACCESS_TTL_SECONDS),
            'refresh_expires_at' => now()->addDays(self::REFRESH_TTL_DAYS),
        ]);

        return [
            'access_token' => $access,
            'token_type' => 'Bearer',
            'expires_in' => self::ACCESS_TTL_SECONDS,
            'refresh_token' => $refresh,
            'scope' => $scope,
        ];
    }

    /**
     * Usuario de un token de acceso válido para este conector, o null.
     */
    public static function userForAccessToken(string $token): ?User
    {
        $row = OAuthToken::with('user')
            ->where('access_hash', self::hash($token))
            ->where('access_expires_at', '>', now())
            ->first();

        if (! $row || ! in_array(self::SCOPE, explode(' ', $row->scope), true) || ! self::resourceAllowed($row->resource)) {
            return null;
        }

        // Una escritura cada cinco minutos como mucho: Claude encadena llamadas.
        if (! $row->last_used_at || $row->last_used_at->lt(now()->subMinutes(5))) {
            $row->forceFill(['last_used_at' => now()])->save();
        }

        return $row->user;
    }

    private static function isLoopback(string $host): bool
    {
        return in_array(strtolower($host), ['localhost', '127.0.0.1', '[::1]', '::1'], true);
    }

    private static function withoutPort(string $uri): string
    {
        $parts = parse_url($uri);

        return ($parts['scheme'] ?? '').'://'.($parts['host'] ?? '').($parts['path'] ?? '').(isset($parts['query']) ? '?'.$parts['query'] : '');
    }
}
