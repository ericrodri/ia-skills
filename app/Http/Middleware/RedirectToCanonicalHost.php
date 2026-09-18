<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Consolida el sitio en un único host.
 *
 * `www.ia-skills.com` servía una copia completa del sitio con 200 y, como las
 * URLs se generan a partir del host de la petición, cada página de www emitía
 * un canonical que apuntaba a sí misma. El resultado eran ~3.100 URLs
 * existiendo por duplicado, cada copia declarándose canónica y las señales
 * repartidas entre dos hosts; Bing llegó a indexar la versión www de la
 * portada, /skills y /guias.
 *
 * Lo ideal es resolverlo en nginx (ver nginx.conf), pero esto viaja con el
 * despliegue y no depende de que la configuración del servidor se actualice.
 * Con el redirect en nginx, este middleware no llega a dispararse nunca.
 */
class RedirectToCanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        $canonical = parse_url((string) config('app.url'), PHP_URL_HOST);

        // Solo se redirige el prefijo `www` del host canónico. Cualquier otra
        // variación (una IP, un dominio de staging, un túnel de desarrollo) se
        // sirve tal cual: redirigirla a ciegas rompería esos entornos.
        if (! $canonical || $request->getHost() !== 'www.'.$canonical) {
            return $next($request);
        }

        $scheme = parse_url((string) config('app.url'), PHP_URL_SCHEME) ?: $request->getScheme();

        // 308 fuera de GET/HEAD para no convertir un POST en GET por el camino.
        $status = $request->isMethodSafe() ? 301 : 308;

        return redirect()->away($scheme.'://'.$canonical.$request->getRequestUri(), $status);
    }
}
