<?php

namespace App\Console\Commands;

use App\Models\Skill;
use App\Support\SkillMerger;
use Illuminate\Console\Command;

/**
 * Fusiona las fichas publicadas con títulos casi iguales dentro de una misma
 * profesión (ver App\Support\SkillMerger). Sin --apply solo lista lo que haría.
 *
 *   php artisan skills:merge-duplicates
 *   php artisan skills:merge-duplicates --threshold=0.85 --apply
 *   php artisan skills:merge-duplicates --from=slug-duplicada --into=slug-buena --apply
 */
class SkillMergeDuplicatesCommand extends Command
{
    protected $signature = 'skills:merge-duplicates
        {--threshold=0.8 : Parecido mínimo entre títulos (0-1)}
        {--from= : Fusionar solo esta ficha (slug)…}
        {--into= : …en esta otra (slug)}
        {--apply : Hacer los cambios; sin esta opción solo se listan}';

    protected $description = 'Fusiona fichas duplicadas: la sobrante redirige (301) a la que se queda';

    public function handle(): int
    {
        if ($this->option('from') || $this->option('into')) {
            return $this->mergeOne();
        }

        $groups = SkillMerger::duplicateGroups((float) $this->option('threshold'));
        $merges = array_sum(array_map(fn (array $g) => count($g['merge']), $groups));

        foreach ($groups as $group) {
            $this->line("[{$group['score']}] se queda: {$group['keep']->title}");

            foreach ($group['merge'] as $skill) {
                $this->line("        fusiona: {$skill->title}");
            }
        }

        $this->newLine();
        $this->info(count($groups)." grupos, {$merges} fichas a fusionar.");

        if (! $this->option('apply')) {
            $this->comment('Nada cambiado. Repite con --apply para fusionar.');

            return self::SUCCESS;
        }

        foreach ($groups as $group) {
            foreach ($group['merge'] as $skill) {
                SkillMerger::merge($skill, $group['keep']);
            }
        }

        $this->info("Fusionadas: {$merges}.");

        return self::SUCCESS;
    }

    private function mergeOne(): int
    {
        $from = Skill::firstWhere('slug', $this->option('from'));
        $into = Skill::firstWhere('slug', $this->option('into'));

        if (! $from || ! $into) {
            $this->error('No existe alguna de las dos fichas.');

            return self::FAILURE;
        }

        $this->line("Fusiona «{$from->title}» en «{$into->title}».");

        if (! $this->option('apply')) {
            $this->comment('Nada cambiado. Repite con --apply para fusionar.');

            return self::SUCCESS;
        }

        SkillMerger::merge($from, $into);
        $this->info('Fusionada.');

        return self::SUCCESS;
    }
}
