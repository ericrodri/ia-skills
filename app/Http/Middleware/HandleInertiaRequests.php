<?php

namespace App\Http\Middleware;

use App\Support\BotGuard;
use App\Support\SiteData;
use App\Support\SkillMarkdown;
use App\Support\ToolPages;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user() ? array_merge(
                    $request->user()->only(['id', 'name', 'email', 'username', 'avatar', 'reputation', 'is_verified_expert']),
                    ['is_admin' => (bool) $request->user()->is_admin]
                ) : null,
            ],
            'flash' => [
                'success' => fn () => $request->session()->get('success'),
                'error'   => fn () => $request->session()->get('error'),
            ],
            // Fuente única de la navegación, compartida con layouts/site.blade.php.
            'nav' => [
                'primary' => fn () => SiteData::primaryNav(),
                // null si el paquete npm no esta disponible: /mcp daria 404.
                'mcp' => fn () => SkillMarkdown::mcpAvailable() ? route('mcp') : null,
                // tool_name => slug de /herramientas/{slug}: la etiqueta de
                // herramienta de las fichas enlaza a su página.
                'tools' => fn () => ToolPages::slugsByToolName(),
            ],
            // Ficha antibots de los formularios públicos (App\Support\BotGuard).
            // Se renueva en cada visita; los formularios la leen al enviar.
            'formToken' => fn () => BotGuard::token(),
        ];
    }
}
