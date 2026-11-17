<?php

namespace App\Support;

/**
 * Enlaces de afiliado (config/affiliates.php).
 *
 * Las páginas nunca enlazan directamente al afiliado: pasan por /ir/{tool}
 * (AffiliateController), que cuenta el clic y redirige. Así el panel de
 * analítica sabe qué páginas generan clics, y cambiar un enlace es tocar
 * solo la configuración. Los enlaces llevan rel="sponsored" y un aviso.
 */
class Affiliates
{
    /**
     * Parámetro que el recuadro añade al enlace al pulsarlo (pointerdown o
     * click). Solo los clics que lo traen se cuentan: los robots siguen el
     * href sin él. Ver AffiliateController.
     */
    public const PRESSED = 'pulsado';

    public const DISCLOSURE = 'Enlace de afiliado: si contratas un plan, ia-skills recibe una comisión sin que a ti te cueste más. No cambia lo que recomendamos.';

    /** @return array<string, array{name: string, url: string, pages?: array<string, string>, sid?: string, match?: string, pattern: string, blurb: string, cta: string}> */
    public static function all(): array
    {
        return config('affiliates', []);
    }

    public static function find(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    /**
     * Destino del clic: el enlace propio de la página de origen si lo tiene, o
     * el general, con la página de origen en el parámetro `sid` del programa.
     */
    public static function urlFor(array $tool, ?string $from): string
    {
        $url = ($from !== null ? ($tool['pages'][$from] ?? null) : null) ?? $tool['url'];

        $sid = $from !== null ? trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($from)), '-') : '';

        if ($sid === '' || empty($tool['sid'])) {
            return $url;
        }

        return $url.(str_contains($url, '?') ? '&' : '?').$tool['sid'].'='.substr($sid, 0, 80);
    }

    /**
     * Herramientas mencionadas en un texto, listas para pintar el recuadro.
     * `from` identifica la página de origen en el contador de clics.
     * `title` se usa en las herramientas con `match` => 'title'.
     *
     * @return list<array{slug: string, name: string, blurb: string, cta: string, href: string}>
     */
    /**
     * Nota con enlace dentro de los pasos de una ficha (`tool_tip` en
     * skill-content.json): la herramienta recomendada en el momento en que
     * hace falta, en vez de en el recuadro. null si la herramienta no existe.
     *
     * @param  array{tool?: string, step?: int, text?: string, cta?: string}|null  $tip
     * @return array{slug: string, step: int, text: string, cta: string, href: string}|null
     */
    public static function tip(?array $tip, string $from): ?array
    {
        $slug = $tip['tool'] ?? null;

        if ($slug === null || self::find($slug) === null || empty($tip['text'])) {
            return null;
        }

        return [
            'slug' => $slug,
            'step' => (int) ($tip['step'] ?? 1),
            'text' => $tip['text'],
            'cta' => $tip['cta'] ?? self::find($slug)['cta'],
            'href' => route('affiliates.go', ['tool' => $slug, 'desde' => $from]),
        ];
    }

    public static function forText(string $text, string $from, ?string $title = null): array
    {
        $tools = [];

        foreach (self::all() as $slug => $tool) {
            $haystack = ($tool['match'] ?? 'text') === 'title' ? ($title ?? $text) : $text;

            if (isset($tool['pages'][$from]) || preg_match($tool['pattern'], $haystack)) {
                $tools[] = [
                    'slug' => $slug,
                    'name' => $tool['name'],
                    'blurb' => $tool['blurb'],
                    'cta' => $tool['cta'],
                    'href' => route('affiliates.go', ['tool' => $slug, 'desde' => $from]),
                ];
            }
        }

        return $tools;
    }
}
