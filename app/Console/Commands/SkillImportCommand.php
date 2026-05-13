<?php

namespace App\Console\Commands;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
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
        $skipped = 0;
        $insertedTitles = [];

        foreach ($data as $item) {
            $professionId = $professions[$item['profession_slug'] ?? ''] ?? null;

            if (! $professionId) {
                $this->line("  ⚠ Profesión no encontrada: {$item['profession_slug']} — omitida");
                $skipped++;
                continue;
            }

            if (Skill::whereRaw('LOWER(title) = ?', [strtolower(trim($item['title']))])->exists()) {
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

        $this->info("Insertadas: {$inserted} | Omitidas: {$skipped}");

        return self::SUCCESS;
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
