<?php

namespace App\Console\Commands;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Support\SkillMerger;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class SkillImportCommand extends Command
{
    protected $signature = 'skills:import {file : Path to JSON file with skills array}';
    protected $description = 'Import generated skills from a JSON file into the database';

    public function handle(): int
    {
        $path = $this->argument('file');

        if (! file_exists($path)) {
            $this->error("File not found: {$path}");
            return self::FAILURE;
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->error('JSON inválido: ' . json_last_error_msg());
            return self::FAILURE;
        }

        if (! is_array($data)) {
            $this->error('JSON must be an array of skill objects.');
            return self::FAILURE;
        }

        if (count($data) > 20) {
            $this->error('Máximo 20 skills por importación. El archivo contiene ' . count($data) . '.');
            return self::FAILURE;
        }

        $professions = Profession::where('is_active', true)
            ->pluck('id', 'slug');

        $inserted = 0;
        $updated = 0;
        $skipped = 0;
        $insertedTitles = [];

        foreach ($data as $item) {
            // Con "slug", la entrada corrige una skill ya publicada en vez de
            // crear otra: la URL no cambia y queda una versión nueva en el
            // historial con el motivo ("changelog").
            if (isset($item['slug'])) {
                // Con "merge_into", la ficha es un duplicado: se fusiona en la
                // otra y su URL redirige con un 301 (App\Support\SkillMerger).
                $line = isset($item['merge_into']) ? $this->mergeExisting($item) : $this->updateExisting($item);

                if ($line === null) {
                    $skipped++;
                } else {
                    $updated++;
                    $insertedTitles[] = $line;
                }

                continue;
            }

            $professionId = $professions[$item['profession_slug'] ?? ''] ?? null;

            if (! $professionId) {
                $this->line("  ⚠ Profesión no encontrada: {$item['profession_slug']} — omitida");
                $skipped++;
                continue;
            }

            // Una skill privada de un usuario no cuenta: no puede impedir que
            // el catálogo publique una con el mismo título.
            if (Skill::whereRaw('LOWER(title) = ?', [strtolower(trim($item['title']))])->where('status', '!=', Skill::PRIVATE)->exists()) {
                $this->line("  ⚠ Título duplicado: {$item['title']} — omitida");
                $skipped++;
                continue;
            }

            $slug = $this->uniqueSlug(Str::slug($item['title']));

            $skill = Skill::create([
                'profession_id'     => $professionId,
                'user_id'           => 1,
                'title'             => trim($item['title']),
                'slug'              => $slug,
                'description'       => $item['description'],
                'prompt_content'    => $item['prompt_content'],
                'tool_name'         => $item['tool_name'],
                'difficulty'        => $item['difficulty'],
                'estimated_minutes' => $item['estimated_minutes'] ?? null,
                'use_case'          => $item['use_case'] ?? null,
                'status'            => 'published',
                'resource_type'     => $item['resource_type'] ?? 'prompt',
                'vote_score'        => 0,
                'views_count'       => 0,
                'saves_count'       => 0,
                'version'           => 1,
            ]);

            SkillVersion::create([
                'skill_id'       => $skill->id,
                'user_id'        => 1,
                'version'        => 1,
                'prompt_content' => $skill->prompt_content,
                'changelog'      => 'Generado automáticamente',
            ]);

            $inserted++;
            $insertedTitles[] = "  ✓ [{$skill->slug}] {$skill->title}";
        }

        foreach ($insertedTitles as $line) {
            $this->line($line);
        }

        $this->info("Insertadas: {$inserted} | Actualizadas: {$updated} | Omitidas: {$skipped}");

        return self::SUCCESS;
    }

    /**
     * Campos que una corrección puede cambiar. El slug, el autor, los votos y
     * las métricas nunca se tocan.
     */
    private const UPDATABLE = ['title', 'description', 'prompt_content', 'tool_name', 'difficulty', 'estimated_minutes', 'use_case', 'resource_type'];

    private function updateExisting(array $item): ?string
    {
        $skill = Skill::where('slug', $item['slug'])->where('status', '!=', Skill::PRIVATE)->first();

        if (! $skill) {
            $this->line("  ⚠ No existe la skill {$item['slug']} — omitida");

            return null;
        }

        if (blank($item['changelog'] ?? null)) {
            $this->line("  ⚠ Falta el changelog de la corrección de {$item['slug']} — omitida");

            return null;
        }

        $previousPrompt = $skill->prompt_content;
        $promptChanged = isset($item['prompt_content']) && $item['prompt_content'] !== $previousPrompt;

        $skill->fill(array_intersect_key($item, array_flip(self::UPDATABLE)));

        if (isset($item['profession_slug'])) {
            $professionId = Profession::where('slug', $item['profession_slug'])->value('id');

            if ($professionId) {
                $skill->profession_id = $professionId;
            }
        }

        if (! $skill->isDirty()) {
            $this->line("  · Sin cambios: {$skill->slug}");

            return null;
        }

        if ($promptChanged) {
            $skill->version = $skill->version + 1;
        }

        $skill->save();

        if ($promptChanged) {
            // Las skills importadas antiguas pueden no tener su versión inicial
            // guardada: se reconstruye para que el diff tenga con qué comparar.
            if (! SkillVersion::where('skill_id', $skill->id)->where('version', $skill->version - 1)->exists()) {
                SkillVersion::create([
                    'skill_id'       => $skill->id,
                    'user_id'        => 1,
                    'version'        => $skill->version - 1,
                    'prompt_content' => $previousPrompt,
                    'changelog'      => 'Versión publicada antes del historial',
                ]);
            }

            SkillVersion::create([
                'skill_id'       => $skill->id,
                'user_id'        => 1,
                'version'        => $skill->version,
                'prompt_content' => $skill->prompt_content,
                'changelog'      => $item['changelog'],
            ]);
        }

        return "  ↻ [{$skill->slug}] v{$skill->version}: {$item['changelog']}";
    }

    private function mergeExisting(array $item): ?string
    {
        $from = Skill::where('slug', $item['slug'])->where('status', '!=', Skill::PRIVATE)->first();
        $into = Skill::where('slug', $item['merge_into'])->where('status', '!=', Skill::PRIVATE)->first();

        if (! $from || ! $into) {
            $this->line("  ⚠ No existe {$item['slug']} o {$item['merge_into']} — omitida");

            return null;
        }

        if ($from->status === 'merged') {
            $this->line("  · Ya estaba fusionada: {$from->slug}");

            return null;
        }

        // Si el destino ya se fusionó en otra ficha, se va directo a la final.
        while ($into->status === 'merged' && $into->mergedInto) {
            $into = $into->mergedInto;
        }

        if ($from->is($into)) {
            $this->line("  · {$from->slug} ya es la ficha final — omitida");

            return null;
        }

        SkillMerger::merge($from, $into);

        return "  ⇢ [{$from->slug}] fusionada en {$into->slug}";
    }

    private function uniqueSlug(string $base): string
    {
        $slug = $base;
        $counter = 2;

        while (Skill::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $counter++;
        }

        return $slug;
    }
}
