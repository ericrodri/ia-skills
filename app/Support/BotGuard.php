<?php

namespace App\Support;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

/**
 * Filtro antibots de los formularios públicos (newsletter y registro).
 *
 * En noviembre de 2026 llegaban unas 150 altas falsas al día desde cientos
 * de IP distintas, con navegadores de hace quince años o con el User-Agent
 * entre comillas. Cada alta mandaba un email de confirmación a una dirección
 * real que no lo había pedido, lo que gasta el cupo de Brevo y daña la
 * reputación del dominio. El límite por IP no bastaba.
 *
 * Tres comprobaciones, sin captcha:
 *  - Honeypot (`website`): un campo oculto que solo rellenan los bots.
 *  - User-Agent imposible: vacío, entre comillas o de navegadores retirados.
 *  - Ficha (`_ft`): la hora de carga del formulario cifrada por el servidor.
 *    Sin ficha, con una ficha manipulada o enviada en menos de MIN_SECONDS,
 *    el envío no lo ha hecho una persona.
 */
class BotGuard
{
    public const FIELD = '_ft';

    public const MIN_SECONDS = 3;

    /** Una ficha más antigua se rechaza con un aviso para recargar. */
    public const MAX_SECONDS = 86400;

    public const EXPIRED = 'expired';

    private const IMPOSSIBLE_AGENTS = '/MSIE|Trident\/|BonEcho|Arora|FunWebProducts|AOLBuild|Firefox\/[0-9]\./i';

    public static function token(?int $issuedAt = null): string
    {
        return Crypt::encryptString((string) ($issuedAt ?? time()));
    }

    /**
     * Motivo por el que el envío parece de un bot, o null si parece humano.
     * Devuelve self::EXPIRED si la ficha es auténtica pero ha caducado: ahí
     * sí hay que avisar, porque puede ser una persona con la pestaña abierta
     * desde ayer.
     */
    public static function check(Request $request): ?string
    {
        $reason = self::reason($request);

        if ($reason !== null && $reason !== self::EXPIRED) {
            // Solo el motivo y la ruta: nunca el email.
            Log::info('bot-guard', ['reason' => $reason, 'path' => $request->path()]);
        }

        return $reason;
    }

    private static function reason(Request $request): ?string
    {
        if (filled($request->input('website'))) {
            return 'honeypot';
        }

        $agent = trim((string) $request->userAgent());

        if ($agent === '' || str_starts_with($agent, '"') || str_starts_with($agent, '\\x22') || preg_match(self::IMPOSSIBLE_AGENTS, $agent)) {
            return 'user-agent';
        }

        $token = $request->input(self::FIELD);

        if (! is_string($token) || $token === '') {
            return 'sin-ficha';
        }

        try {
            $issuedAt = (int) Crypt::decryptString($token);
        } catch (DecryptException) {
            return 'ficha-invalida';
        }

        $age = time() - $issuedAt;

        if ($age < self::MIN_SECONDS) {
            return 'demasiado-rapido';
        }

        if ($age > self::MAX_SECONDS) {
            return self::EXPIRED;
        }

        return null;
    }
}
