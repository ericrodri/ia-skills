<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use App\Support\SiteData;
use App\Support\SkillMarkdown;
use Illuminate\Contracts\View\View;

/**
 * /mcp — el catálogo dentro de Claude Code.
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
            'title' => 'ia-skills en Claude Code: servidor MCP con prompts en español',
            'description' => "Conecta Claude Code al catálogo de ia-skills con un comando y deja que Claude busque e instale por su cuenta {$count} prompts y skills de IA en español para tu profesión.",
            'canonical' => route('mcp'),
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Claude Code (MCP)' => route('mcp'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'SoftwareApplication',
                    'name' => 'ia-skills MCP',
                    'applicationCategory' => 'DeveloperApplication',
                    'operatingSystem' => 'macOS, Linux, Windows',
                    'description' => "Servidor MCP que da a Claude Code acceso al catálogo de ia-skills: {$count} prompts y skills de IA en español, organizados por profesión.",
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
