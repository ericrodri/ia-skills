<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use App\Support\SiteData;
use App\Support\SkillMarkdown;
use Illuminate\Contracts\View\View;

/**
 * /mcp — ia-skills dentro de Claude: el conector remoto (web, escritorio,
 * móvil y Claude Code) y la versión local que instala skills como archivos.
 *
 * Es la URL que se comparte fuera: la que figura como `websiteUrl` en el
 * registro oficial de MCP, la que se envía a los directorios y la que se pega
 * en redes. Por eso es Blade puro (layouts/site), como las guías: todo el
 * contenido va en el HTML y lo leen sin JavaScript los rastreadores, los
 * directorios y las previsualizaciones de enlaces.
 *
 * Si el paquete npm no está disponible (config/distribution.php), la página no
 * existe: no tiene sentido anunciar un comando que falla al pegarlo.
 */
class McpController extends Controller
{
    public function __invoke(): View
    {
        abort_unless(SkillMarkdown::mcpAvailable(), 404);

        $count = SiteData::skillsCountLabel();
        $package = config('distribution.npm_package');

        Seo::share([
            'title' => 'Usa ia-skills en Claude: conector MCP con prompts en español',
            'description' => "Conecta ia-skills a Claude (web, móvil o Claude Code) y pídele sin salir del chat {$count} prompts en español, tus guardadas y tus skills privadas.",
            'canonical' => route('mcp'),
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Usar en Claude (MCP)' => route('mcp'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'SoftwareApplication',
                    'name' => 'ia-skills MCP',
                    'applicationCategory' => 'DeveloperApplication',
                    'operatingSystem' => 'macOS, Linux, Windows',
                    'description' => "Conector MCP que da a Claude acceso al catálogo de ia-skills: {$count} prompts y skills de IA en español, organizados por profesión, más las fichas guardadas y las skills privadas de quien inicia sesión.",
                    'url' => route('mcp'),
                    'downloadUrl' => "https://www.npmjs.com/package/{$package}",
                    'inLanguage' => 'es',
                    'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'EUR'],
                ],
            ],
        ]);

        return view('mcp', [
            'command' => SkillMarkdown::mcpCommand(),
            'package' => $package,
            'skillsCount' => $count,
            'professions' => SiteData::professions(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
