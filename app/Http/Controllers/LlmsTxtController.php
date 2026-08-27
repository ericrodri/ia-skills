<?php

namespace App\Http\Controllers;

use App\Support\Guides;
use App\Support\SiteData;
use Illuminate\Http\Response;

/**
 * /llms.txt — índice en Markdown para motores generativos.
 *
 * Convención propuesta por Jeremy Howard: un mapa plano y sin ruido de lo que
 * el sitio ofrece, para que un modelo que nos rastrea sepa qué páginas importan
 * sin tener que deducirlo del HTML. No es un estándar oficial ni sustituye al
 * sitemap: el sitemap es para buscadores, esto es para quien resume.
 *
 * Se genera dinámicamente para que las profesiones y las guías no se queden
 * desfasadas, pero solo usa arrays planos (ver la regla de caché del proyecto:
 * nunca objetos de Eloquent en `Cache::remember`).
 */
class LlmsTxtController extends Controller
{
    public function __invoke(): Response
    {
        $lines = [
            '# ia-skills',
            '',
            '> Biblioteca colaborativa de prompts y skills de IA en español, organizados por '
                .'profesión y ordenados por los votos de quien los usa a diario. '
                .SiteData::skillsCountLabel().' recursos publicados, gratis y sin registro para consultarlos.',
            '',
            'El catálogo cubre prompts reutilizables y skills instalables (carpetas con un '
                .'SKILL.md) para Claude, ChatGPT y otros asistentes. Las guías explican el método; '
                .'las páginas de profesión llevan al material listo para copiar.',
            '',
            '## Guías',
            '',
        ];

        foreach (Guides::all() as $guide) {
            $lines[] = sprintf(
                '- [%s](%s): %s',
                $guide['title'],
                route('guides.show', ['slug' => $guide['slug']]),
                $guide['description'],
            );
        }

        $lines[] = '';
        $lines[] = '## Prompts y skills por profesión';
        $lines[] = '';

        foreach (SiteData::professions() as $profession) {
            $lines[] = sprintf(
                '- [%s](%s): prompts y skills de IA para %s (%d publicados).',
                $profession['name'],
                route('professions.show', ['profession' => $profession['slug']]),
                $profession['name'],
                $profession['skills_count'],
            );
        }

        $lines = array_merge($lines, [
            '',
            '## Páginas principales',
            '',
            '- ['.'Catálogo completo]('.route('skills.index').'): todas las skills y prompts, filtrables por profesión.',
            '- [Profesiones]('.route('professions.index').'): índice de áreas cubiertas.',
            '- [Guías]('.route('guides.index').'): contenido editorial sobre skills, prompts y automatización.',
            '- [Cómo funciona]('.route('how-it-works').'): qué es una skill y cómo se publica en el catálogo.',
            '',
            '## Opcional',
            '',
            '- [Sitemap]('.route('sitemap').'): índice XML de todas las URLs.',
            '- [Feed RSS]('.route('feed').'): últimas skills publicadas.',
            '',
        ]);

        return response(implode("\n", $lines))
            ->header('Content-Type', 'text/plain; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=21600');
    }
}
