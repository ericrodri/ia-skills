<?php

namespace App\Support;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

/**
 * SEO server-side para una aplicación Inertia sin SSR.
 *
 * El problema que resuelve: los `<Head>` de Inertia solo se aplican en el
 * cliente, así que el HTML que recibe un crawler no tiene title real,
 * description, canonical ni datos estructurados. Aquí los metadatos viajan
 * como variable compartida de la vista raíz (`app.blade.php`), no como prop
 * de Inertia, para no duplicar peso en el JSON de `data-page`.
 */
class Seo
{
    public const SITE_NAME = 'ia-skills';

    public const TITLE_SUFFIX = ' | ia-skills';

    public const TITLE_MAX = 65;

    public const DESCRIPTION_MAX = 158;

    /**
     * Comparte los metadatos con la vista raíz.
     *
     * @param  array<string, mixed>  $data
     */
    public static function share(array $data): void
    {
        View::share('seo', self::normalize($data));
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public static function normalize(array $data): array
    {
        $title = self::clean($data['title'] ?? config('app.name'));

        if (! Str::endsWith($title, self::TITLE_SUFFIX) && ! Str::contains($title, self::SITE_NAME)) {
            $title .= self::TITLE_SUFFIX;
        }

        // `preserveWords` corta por la última palabra entera, no por el
        // carácter 158: sin él, 677 de las 1.103 fichas publicadas servían una
        // description partida a media palabra («...enfoques (emocional, urgen…»),
        // que es lo que Google enseña en el snippet.
        $description = Str::limit(self::clean($data['description'] ?? ''), self::DESCRIPTION_MAX, '…', preserveWords: true);
        $canonical = $data['canonical'] ?? url()->current();

        return [
            'title' => $title,
            'description' => $description,
            'canonical' => $canonical,
            'robots' => $data['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
            'ogType' => $data['ogType'] ?? 'website',
            'ogImage' => $data['ogImage'] ?? route('og.default'),
            'ogImageAlt' => self::clean($data['ogImageAlt'] ?? $title),
            'locale' => $data['locale'] ?? 'es_ES',
            'prev' => $data['prev'] ?? null,
            'next' => $data['next'] ?? null,
            // Contenido equivalente para clientes sin JavaScript (Bingbot, GPTBot,
            // ClaudeBot...). Refleja lo que la página muestra, no contenido extra.
            'fallback' => $data['fallback'] ?? null,
            'schema' => array_values(array_filter($data['schema'] ?? [])),
        ];
    }

    /**
     * Limpia saltos de línea y espacios dobles: los metadatos vienen de
     * contenido escrito por usuarios y Markdown multilínea.
     */
    public static function clean(?string $value): string
    {
        return trim(preg_replace('/\s+/u', ' ', (string) $value));
    }

    /**
     * Migas de pan en JSON-LD. Recibe pares [nombre => url].
     *
     * @param  array<string, string>  $items
     * @return array<string, mixed>
     */
    public static function breadcrumbs(array $items): array
    {
        $position = 0;

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => collect($items)->map(fn ($url, $name) => [
                '@type' => 'ListItem',
                'position' => ++$position,
                'name' => $name,
                'item' => $url,
            ])->values()->all(),
        ];
    }

    /**
     * Bloque FAQPage. Recibe pares [pregunta => respuesta].
     *
     * @param  array<string, string>  $pairs
     * @return array<string, mixed>|null
     */
    public static function faq(array $pairs): ?array
    {
        if (empty($pairs)) {
            return null;
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => collect($pairs)->map(fn ($answer, $question) => [
                '@type' => 'Question',
                'name' => $question,
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $answer],
            ])->values()->all(),
        ];
    }

    /**
     * Identidad del sitio: se emite en todas las páginas para consolidar
     * la entidad "ia-skills" en el Knowledge Graph.
     *
     * @return array<string, mixed>
     */
    public static function organization(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => url('/').'#organization',
            'name' => self::SITE_NAME,
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => url('/favicon.svg'),
            ],
            'description' => 'Biblioteca colaborativa de prompts y skills de IA organizados por profesión.',
            'inLanguage' => 'es',
        ];
    }
}
