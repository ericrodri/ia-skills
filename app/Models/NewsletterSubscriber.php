<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;

/**
 * Suscriptor del resumen semanal sin cuenta en la web (doble opt-in).
 */
class NewsletterSubscriber extends Model
{
    use MassPrunable;

    /** Días que se conservan las altas sin confirmar y las bajas (ver /privacidad). */
    public const RETENTION_DAYS = 30;

    protected $fillable = ['email', 'source'];

    /**
     * `model:prune` (programado a diario en routes/console.php) borra las
     * altas que nunca se confirmaron y las bajas pasados RETENTION_DAYS. Es
     * lo que promete la política de privacidad: si cambias el plazo, cambia
     * también el texto.
     */
    public function prunable(): Builder
    {
        $limit = now()->subDays(self::RETENTION_DAYS);

        return static::query()->where(fn ($q) => $q
            ->where(fn ($q) => $q->whereNull('confirmed_at')->where('created_at', '<', $limit))
            ->orWhere('unsubscribed_at', '<', $limit));
    }

    protected $casts = [
        'confirmed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];

    /**
     * Confirmados y sin baja: los únicos que reciben el resumen.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->whereNotNull('confirmed_at')->whereNull('unsubscribed_at');
    }

    public function isActive(): bool
    {
        return $this->confirmed_at !== null && $this->unsubscribed_at === null;
    }
}
