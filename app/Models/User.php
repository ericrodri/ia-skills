<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // api_token queda fuera de fillable a propÃ³sito: se escribe solo desde
    // createApiToken()/revokeApiToken(), nunca por asignaciÃ³n masiva.
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'bio',
        'avatar',
        'reputation',
        'is_verified_expert',
        'is_admin',
        'notify_by_email',
        'newsletter_opt_in',
    ];

    /** Usernames que chocarían con rutas o se prestarían a suplantación. */
    public const RESERVED_USERNAMES = ['admin', 'administrador', 'ia-skills', 'soporte', 'api', 'equipo', 'moderador'];

    protected $hidden = ['password', 'remember_token', 'api_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_verified_expert' => 'boolean',
            'is_admin' => 'boolean',
            'api_token_last_used_at' => 'datetime',
            'notify_by_email' => 'boolean',
            'newsletter_opt_in' => 'boolean',
        ];
    }

    /**
     * El perfil público (/autores/{username}) necesita un username, pero el
     * registro no lo pide: se deriva del nombre y el usuario puede cambiarlo
     * desde su perfil.
     */
    protected static function booted(): void
    {
        static::creating(function (User $user) {
            if (blank($user->username)) {
                $user->username = static::uniqueUsername($user->name ?? '');
            }
        });
    }

    public static function uniqueUsername(string $name): string
    {
        $base = Str::limit(Str::slug($name) ?: 'usuario', 24, '');

        if (in_array($base, self::RESERVED_USERNAMES, true)) {
            $base .= '-1';
        }

        $username = $base;
        $suffix = 1;

        while (static::where('username', $username)->exists()) {
            $username = $base.'-'.++$suffix;
        }

        return $username;
    }

    /**
     * Genera una API key nueva. En la columna solo se guarda su hash SHA-256;
     * el valor en claro se devuelve una Ãºnica vez y no se puede recuperar.
     */
    public function createApiToken(): string
    {
        $plainTextToken = Str::random(48);

        $this->forceFill([
            'api_token' => hash('sha256', $plainTextToken),
            'api_token_prefix' => substr($plainTextToken, 0, 8),
            'api_token_last_used_at' => null,
        ])->save();

        return $plainTextToken;
    }

    public function revokeApiToken(): void
    {
        $this->forceFill([
            'api_token' => null,
            'api_token_prefix' => null,
            'api_token_last_used_at' => null,
        ])->save();
    }

    public static function findByApiToken(?string $plainTextToken): ?self
    {
        if (blank($plainTextToken)) {
            return null;
        }

        return static::where('api_token', hash('sha256', $plainTextToken))->first();
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function savedSkills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'saved_skills')->withTimestamps();
    }

    public function hasVoted(Skill $skill): ?int
    {
        return $this->votes()->where('skill_id', $skill->id)->value('value');
    }

    public function hasSaved(Skill $skill): bool
    {
        return $this->savedSkills()->where('skill_id', $skill->id)->exists();
    }
}
