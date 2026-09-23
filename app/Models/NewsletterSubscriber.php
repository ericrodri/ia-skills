<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Suscriptor del resumen semanal sin cuenta en la web (doble opt-in).
 */
class NewsletterSubscriber extends Model
{
    protected $fillable = ['email', 'source'];

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
