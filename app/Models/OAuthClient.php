<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Aplicación registrada para usar el conector (normalmente Claude, que se
 * registra sola con el registro dinámico). Su nombre lo elige ella: en la
 * pantalla de permiso se muestra como «se presenta como», junto al dominio
 * al que volverá, que es lo que de verdad la identifica.
 */
class OAuthClient extends Model
{
    use MassPrunable;

    protected $table = 'oauth_clients';

    protected $fillable = ['client_id', 'secret_hash', 'name', 'redirect_uris'];

    protected $hidden = ['secret_hash'];

    protected $casts = ['redirect_uris' => 'array'];

    public function tokens(): HasMany
    {
        return $this->hasMany(OAuthToken::class, 'client_id');
    }

    /**
     * El registro es abierto: los clientes que nadie llegó a autorizar se
     * borran al mes para que no se acumulen.
     */
    public function prunable(): Builder
    {
        return static::query()
            ->where('created_at', '<', now()->subDays(30))
            ->whereDoesntHave('tokens');
    }
}
