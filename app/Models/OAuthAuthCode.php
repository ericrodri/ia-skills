<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Código de autorización: de un solo uso (se borra al canjearlo) y con
 * caducidad de minutos. Solo se guarda su resumen.
 */
class OAuthAuthCode extends Model
{
    use MassPrunable;

    protected $table = 'oauth_auth_codes';

    protected $fillable = ['code_hash', 'client_id', 'user_id', 'redirect_uri', 'code_challenge', 'scope', 'resource', 'expires_at'];

    protected $casts = ['expires_at' => 'datetime'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(OAuthClient::class, 'client_id');
    }

    public function prunable(): Builder
    {
        return static::query()->where('expires_at', '<', now());
    }
}
