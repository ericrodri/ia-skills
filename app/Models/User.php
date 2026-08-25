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

    // api_token queda fuera de fillable a propósito: se escribe solo desde
    // createApiToken()/revokeApiToken(), nunca por asignación masiva.
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
    ];

    protected $hidden = ['password', 'remember_token', 'api_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_verified_expert' => 'boolean',
            'is_admin' => 'boolean',
            'api_token_last_used_at' => 'datetime',
        ];
    }

    /**
     * Genera una API key nueva. En la columna solo se guarda su hash SHA-256;
     * el valor en claro se devuelve una única vez y no se puede recuperar.
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
