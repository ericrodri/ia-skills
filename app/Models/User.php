<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

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
        'api_token',
    ];

    protected $hidden = ['password', 'remember_token', 'api_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_verified_expert' => 'boolean',
            'is_admin' => 'boolean',
        ];
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
