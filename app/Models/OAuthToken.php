<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\MassPrunable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Par de tokens de acceso y renovación de una aplicación conectada. Al
 * renovar se emite un par nuevo y este se borra (rotación). Desconectar la
 * aplicación desde el perfil borra todos los suyos.
 */
class OAuthToken extends Model
{
    use MassPrunable;

    protected $table = 'oauth_tokens';

    protected $fillable = ['client_id', 'user_id', 'access_hash', 'refresh_hash', 'scope', 'resource', 'access_expires_at', 'refresh_expires_at', 'last_used_at'];

    protected $hidden = ['access_hash', 'refresh_hash'];

    protected $casts = [
        'access_expires_at' => 'datetime',
        'refresh_expires_at' => 'datetime',
        'last_used_at' => 'datetime',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(OAuthClient::class, 'client_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function prunable(): Builder
    {
        return static::query()->where('refresh_expires_at', '<', now());
    }
}
