<?php

namespace App\Support;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

/**
 * Pack descargable «Las 20 mejores skills de {profesión}», el regalo del
 * formulario de las páginas de profesión.
 *
 * Quien lo pide se apunta al resumen semanal con `source` = "pack:{slug}".
 * El enlace al pack es una URL firmada que solo se entrega después de
 * confirmar el email (o directamente por email si ya estaba suscrito), y la
 * página es imprimible: el navegador la guarda como PDF.
 */
class ProfessionPack
{
    public const SIZE = 20;

    public const SOURCE_PREFIX = 'pack:';

    /** Días que vale el enlace de descarga. */
    public const LINK_DAYS = 30;

    public static function source(Profession $profession): string
    {
        return self::SOURCE_PREFIX.$profession->slug;
    }

    /**
     * Profesión del pack pedido, a partir del `source` del suscriptor.
     */
    public static function professionFromSource(?string $source): ?Profession
    {
        if ($source === null || ! Str::startsWith($source, self::SOURCE_PREFIX)) {
            return null;
        }

        return Profession::where('is_active', true)
            ->where('slug', Str::after($source, self::SOURCE_PREFIX))
            ->first();
    }

    public static function url(Profession $profession): string
    {
        return URL::temporarySignedRoute(
            'professions.pack',
            now()->addDays(self::LINK_DAYS),
            ['profession' => $profession->slug],
        );
    }

    /**
     * Las skills más votadas de la profesión, con el prompt completo.
     *
     * @return Collection<int, Skill>
     */
    public static function skills(Profession $profession): Collection
    {
        return Skill::published()
            ->where('profession_id', $profession->id)
            ->orderByDesc('vote_score')
            ->orderByDesc('views_count')
            ->limit(self::SIZE)
            ->get(['id', 'slug', 'title', 'description', 'use_case', 'prompt_content', 'tool_name', 'resource_type']);
    }
}
