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
    public const DISCLOSURE = 'Enlace de afiliado: si contratas un plan, ia-skills recibe una comisión sin que a ti te cueste más. No cambia lo que recomendamos.';

    /** @return array<string, array{name: string, url: string, pattern: string, blurb: string, cta: string}> */
    public static function all(): array
    {
        return config('affiliates', []);
    }

    public static function find(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    /**
     * Herramientas mencionadas en un texto, listas para pintar el recuadro.
     * `from` identifica la página de origen en el contador de clics.
     *
     * @return list<array{slug: string, name: string, blurb: string, cta: string, href: string}>
     */
    public static function forText(string $text, string $from): array
    {
        $tools = [];

        foreach (self::all() as $slug => $tool) {
            if (preg_match($tool['pattern'], $text)) {
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
