<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

/**
 * Página vista registrada por la analítica propia (App\Support\Analytics).
 */
class PageView extends Model
{
    use Prunable;

    /** Meses que se conservan las visitas. No identifican a nadie. */
    public const KEEP_MONTHS = 25;

    public const UPDATED_AT = null;

    // Sin cast de fecha en `day`: se guarda como 'AAAA-MM-DD' y así las
    // consultas por rango comparan igual en PostgreSQL y en SQLite (tests).
    protected $fillable = ['day', 'path', 'referrer', 'utm_source', 'visitor', 'device'];

    public function prunable(): Builder
    {
        return static::where('day', '<', now()->subMonths(self::KEEP_MONTHS)->toDateString());
    }
}
