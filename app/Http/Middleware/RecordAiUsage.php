<?php

namespace App\Http\Middleware;

use App\Support\AiUsage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Cuenta las peticiones de asistentes, agentes y rastreadores de IA
 * (App\Support\AiUsage). Trabaja en terminate(), después de enviar la
 * respuesta, para no añadir tiempo a ninguna página.
 */
class RecordAiUsage
{
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void
    {
        AiUsage::record($request, $response);
    }
}
