<?php

namespace App\Models;

use App\Observers\SkillObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

#[ObservedBy([SkillObserver::class])]
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
        'installs_count',
        'version',
        'resource_type',
    ];

    /**
     * La columna generada `search_vector` viajaba en el payload de Inertia de
     * cada ficha (un tsvector completo, cientos de bytes por skill) sin que el
     * frontend la use nunca.
     */
    protected $hidden = [
        'search_vector',
        // Enlace secreto del SKILL.md de una skill privada: nunca en un payload.
        'access_token',
    ];

    /** Solo la ve su autor. Ver la migración 2026_11_11_000001_add_private_skills. */
    public const PRIVATE = 'private';

    /** Estados que el autor puede cambiar entre sí: los que nadie más ve. */
    public const OWNER_STATUSES = ['draft', 'rejected', self::PRIVATE];

    public function isPrivate(): bool
    {
        return $this->status === self::PRIVATE;
    }

    /**
     * Pasa la skill a privada, con su enlace secreto para el SKILL.md.
     */
    public function makePrivate(): void
    {
        $this->status = self::PRIVATE;
        $this->access_token ??= Str::random(40);
    }

    public function hasAccessToken(?string $token): bool
    {
        return $this->isPrivate()
            && $this->access_token !== null
            && is_string($token)
            && hash_equals($this->access_token, $token);
    }

    protected $casts = [
        'estimated_minutes' => 'integer',
        'vote_score' => 'integer',
        'views_count' => 'integer',
        'saves_count' => 'integer',
        'installs_count' => 'integer',
        'version' => 'integer',
    ];

    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    /**
     * Ficha en la que se fusionó esta, si era un duplicado (App\Support\SkillMerger).
     */
    public function mergedInto(): BelongsTo
    {
        return $this->belongsTo(Skill::class, 'merged_into_id');
    }

    /**
     * Respuesta 301 hacia la ficha que sustituye a esta, o null si no está fusionada.
     */
    public function mergedRedirect(string $route, array $parameters = []): ?RedirectResponse
    {
        if ($this->status !== 'merged' || ! $this->mergedInto) {
            return null;
        }

        return redirect()->route($route, ['skill' => $this->mergedInto->slug] + $parameters, 301);
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

    /**
     * Suma (o resta, con $amount negativo) a un contador sin tocar updated_at.
     *
     * updated_at es la fecha de modificación que ven Google (dateModified y
     * lastmod del sitemap): si cada visita o voto la movía, todo el catálogo
     * parecía cambiar a diario y Google deja de fiarse de esas fechas.
     */
    public function bump(string $column, int $amount = 1): void
    {
        static::withoutTimestamps(fn () => $this->increment($column, $amount));
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
