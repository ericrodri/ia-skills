<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profession extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'skills_count',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function publishedSkills(): HasMany
    {
        return $this->hasMany(Skill::class)->where('status', 'published');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
