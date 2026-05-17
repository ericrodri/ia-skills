<?php

namespace App\Models;

use App\Observers\SkillObserver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[\Illuminate\Database\Eloquent\Attributes\ObservedBy([SkillObserver::class])]
class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'profession_id',
        'user_id',
        'title',
        'slug',
        'description',
        'prompt_content',
        'tool_name',
        'difficulty',
        'estimated_minutes',
        'use_case',
        'status',
        'vote_score',
        'views_count',
        'saves_count',
        'version',
        'resource_type',
    ];

    protected $casts = [
        'estimated_minutes' => 'integer',
        'vote_score' => 'integer',
        'views_count' => 'integer',
        'saves_count' => 'integer',
        'version' => 'integer',
    ];

    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id')->orderBy('created_at');
    }

    public function versions(): HasMany
    {
        return $this->hasMany(SkillVersion::class)->orderByDesc('version');
    }

    public function savers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'saved_skills')->withTimestamps();
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }

    public function scopeTopRated(Builder $query): Builder
    {
        return $query->orderByDesc('vote_score');
    }

    public function scopeTrending(Builder $query): Builder
    {
        return $query->where('created_at', '>=', now()->subDays(7))->orderByDesc('vote_score');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
