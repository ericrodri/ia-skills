<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use InvalidArgumentException;

/**
 * Fusiona fichas duplicadas: la que sobra deja de publicarse, su URL redirige
 * con un 301 a la que se queda (SkillController, SkillMarkdownController) y
 * lo que tenía de los usuarios —comentarios, guardados y votos— pasa a la
 * otra. Así no se pierde ni un enlace ni el trabajo de nadie.
 */
class SkillMerger
{
    /** Palabras que no cuentan al comparar títulos. */
    private const STOPWORDS = [
        'de', 'la', 'el', 'en', 'y', 'a', 'los', 'las', 'del', 'para', 'con', 'por', 'un', 'una',
        'que', 'ia', 'tu', 'tus', 'su', 'sus', 'o', 'e', 'al', 'como', 'sin',
    ];

    public static function merge(Skill $from, Skill $into): void
    {
        // Los modelos de duplicateGroups() vienen con columnas parciales.
        $from = $from->fresh();
        $into = $into->fresh();

        if ($from->is($into)) {
            throw new InvalidArgumentException('Una ficha no se puede fusionar consigo misma.');
        }

        if ($into->status === 'merged') {
            throw new InvalidArgumentException("La ficha de destino {$into->slug} ya está fusionada en otra.");
        }

        DB::transaction(function () use ($from, $into) {
            DB::table('comments')->where('skill_id', $from->id)->update(['skill_id' => $into->id]);

            // Guardados y votos son únicos por usuario y ficha: se mueven los
            // de quien no tenía ya la otra, y el resto se descarta.
            foreach (['saved_skills', 'votes'] as $table) {
                $already = DB::table($table)->where('skill_id', $into->id)->pluck('user_id');
                DB::table($table)->where('skill_id', $from->id)->whereNotIn('user_id', $already)->update(['skill_id' => $into->id]);
                DB::table($table)->where('skill_id', $from->id)->delete();
            }

            $into->forceFill([
                // Las puntuaciones de las fichas sembradas no salen de votos
                // reales: se conserva la mayor en lugar de sumarlas.
                'vote_score' => max($into->vote_score, $from->vote_score),
                'saves_count' => max($into->saves_count, $from->saves_count, DB::table('saved_skills')->where('skill_id', $into->id)->count()),
                'installs_count' => $into->installs_count + $from->installs_count,
            ])->save();

            // Si otras fichas ya estaban fusionadas en esta, pasan a apuntar
            // directamente al destino final: nada de redirecciones en cadena.
            Skill::where('merged_into_id', $from->id)->update(['merged_into_id' => $into->id]);

            $from->forceFill(['status' => 'merged', 'merged_into_id' => $into->id])->save();
        });
    }

    /**
     * Grupos de fichas publicadas de la misma profesión con títulos casi
     * iguales. Cada grupo lleva primero la que se queda: la de prompt más
     * completo y, a igualdad, la más antigua.
     *
     * @return array<int, array{keep: Skill, merge: array<int, Skill>, score: float}>
     */
    public static function duplicateGroups(float $threshold = 0.8): array
    {
        $groups = [];

        Skill::published()
            ->get(['id', 'profession_id', 'title', 'slug', 'prompt_content', 'created_at'])
            ->groupBy('profession_id')
            ->each(function (Collection $skills) use ($threshold, &$groups) {
                $items = $skills->values();
                $tokens = $items->map(fn (Skill $s) => self::tokens($s->title))->all();
                $parent = range(0, $items->count() - 1);
                $best = [];

                $find = function (int $i) use (&$parent, &$find): int {
                    return $parent[$i] === $i ? $i : ($parent[$i] = $find($parent[$i]));
                };

                for ($i = 0; $i < $items->count(); $i++) {
                    for ($j = $i + 1; $j < $items->count(); $j++) {
                        $score = self::similarity($tokens[$i], $tokens[$j]);

                        if ($score >= $threshold) {
                            $parent[$find($j)] = $find($i);
                            $root = $find($i);
                            $best[$root] = max($best[$root] ?? 0, $score);
                        }
                    }
                }

                $clusters = [];
                foreach (array_keys($parent) as $i) {
                    $clusters[$find($i)][] = $items[$i];
                }

                foreach ($clusters as $root => $members) {
                    if (count($members) < 2) {
                        continue;
                    }

                    usort($members, fn (Skill $a, Skill $b) => [mb_strlen($b->prompt_content), $a->id] <=> [mb_strlen($a->prompt_content), $b->id]);
                    $keep = array_shift($members);
                    $keepTokens = self::tokens($keep->title);

                    // Solo lo que se parece directamente a la que se queda: un
                    // grupo encadenado (A~B, B~C) no basta para fusionar C en A.
                    $merge = array_values(array_filter(
                        $members,
                        fn (Skill $s) => self::similarity($keepTokens, self::tokens($s->title)) >= $threshold,
                    ));

                    if ($merge === []) {
                        continue;
                    }

                    $groups[] = [
                        'keep' => $keep,
                        'merge' => $merge,
                        'score' => round($best[$root] ?? $threshold, 2),
                    ];
                }
            });

        return $groups;
    }

    /**
     * Coincidencia de palabras significativas entre dos títulos (Jaccard).
     *
     * @param  array<int, string>  $a
     * @param  array<int, string>  $b
     */
    public static function similarity(array $a, array $b): float
    {
        if ($a === [] || $b === []) {
            return 0.0;
        }

        return count(array_intersect($a, $b)) / count(array_unique(array_merge($a, $b)));
    }

    /**
     * @return array<int, string>
     */
    public static function tokens(string $title): array
    {
        $words = preg_split('/[^a-z0-9ñ]+/u', Str::lower(Str::ascii($title)), -1, PREG_SPLIT_NO_EMPTY);

        return array_values(array_unique(array_filter(
            $words,
            fn (string $w) => strlen($w) > 2 && ! in_array($w, self::STOPWORDS, true),
        )));
    }
}
