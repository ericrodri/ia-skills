<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\PendingCommand;
use Tests\TestCase;

/**
 * skills:import con "slug": corrige una skill ya publicada sin cambiar su URL.
 */
class SkillImportUpdateTest extends TestCase
{
    use RefreshDatabase;

    private Skill $skill;

    protected function setUp(): void
    {
        parent::setUp();

        User::factory()->create(['id' => 1]);

        $this->skill = Skill::factory()->create([
            'slug' => 'caveman-reduce-un-75-los-tokens',
            'title' => 'Caveman — Reduce un 75% los tokens',
            'prompt_content' => 'Instalación antigua',
            'vote_score' => 12,
            'version' => 1,
        ]);
    }

    private function import(array $items): PendingCommand
    {
        $path = tempnam(sys_get_temp_dir(), 'imp').'.json';
        file_put_contents($path, json_encode($items));

        return $this->artisan('skills:import', ['file' => $path]);
    }

    public function test_it_updates_an_existing_skill_and_records_both_versions(): void
    {
        $this->import([[
            'slug' => 'caveman-reduce-un-75-los-tokens',
            'title' => 'Caveman — Respuestas más cortas en Claude Code',
            'prompt_content' => 'Instalación correcta',
            'changelog' => 'Comandos verificados en el README',
        ]])->expectsOutputToContain('Actualizadas: 1')->assertSuccessful();

        $skill = $this->skill->fresh();

        $this->assertSame('caveman-reduce-un-75-los-tokens', $skill->slug);
        $this->assertSame('Caveman — Respuestas más cortas en Claude Code', $skill->title);
        $this->assertSame('Instalación correcta', $skill->prompt_content);
        $this->assertSame(2, $skill->version);
        $this->assertSame(12, $skill->vote_score);
        $this->assertSame(1, Skill::count());

        // La v1 se reconstruye con el contenido anterior para que el diff funcione.
        $this->assertSame('Instalación antigua', SkillVersion::where('skill_id', $skill->id)->where('version', 1)->value('prompt_content'));
        $this->assertSame('Comandos verificados en el README', SkillVersion::where('skill_id', $skill->id)->where('version', 2)->value('changelog'));
    }

    public function test_metadata_only_changes_do_not_create_a_version(): void
    {
        $this->import([[
            'slug' => 'caveman-reduce-un-75-los-tokens',
            'description' => 'Nueva descripción',
            'changelog' => 'Descripción corregida',
        ]])->assertSuccessful();

        $this->assertSame(1, $this->skill->fresh()->version);
        $this->assertSame(0, SkillVersion::count());
    }

    public function test_an_update_without_changelog_or_unknown_slug_is_skipped(): void
    {
        $this->import([
            ['slug' => 'caveman-reduce-un-75-los-tokens', 'prompt_content' => 'x'],
            ['slug' => 'no-existe', 'prompt_content' => 'x', 'changelog' => 'y'],
        ])->expectsOutputToContain('Omitidas: 2')->assertSuccessful();

        $this->assertSame('Instalación antigua', $this->skill->fresh()->prompt_content);
    }

    public function test_it_never_touches_protected_fields(): void
    {
        $this->import([[
            'slug' => 'caveman-reduce-un-75-los-tokens',
            'vote_score' => 9999,
            'status' => 'draft',
            'user_id' => 99,
            'prompt_content' => 'Nuevo',
            'changelog' => 'x',
        ]])->assertSuccessful();

        $skill = $this->skill->fresh();
        $this->assertSame(12, $skill->vote_score);
        $this->assertSame('published', $skill->status);
    }

    public function test_an_entry_with_merge_into_merges_the_duplicate(): void
    {
        $dup = Skill::factory()->create(['slug' => 'caveman-duplicada', 'title' => 'Caveman duplicada', 'status' => 'published']);

        $this->import([['slug' => 'caveman-duplicada', 'merge_into' => 'caveman-reduce-un-75-los-tokens']])
            ->expectsOutputToContain('Actualizadas: 1')
            ->assertSuccessful();

        $this->assertSame('merged', $dup->fresh()->status);
        $this->assertSame($this->skill->id, $dup->fresh()->merged_into_id);

        // Repetir el archivo no hace nada.
        $this->import([['slug' => 'caveman-duplicada', 'merge_into' => 'caveman-reduce-un-75-los-tokens']])
            ->expectsOutputToContain('Omitidas: 1')
            ->assertSuccessful();
    }

    public function test_new_and_updated_skills_can_share_a_file(): void
    {
        Profession::factory()->create(['slug' => 'desarrollo']);

        $this->import([
            ['slug' => 'caveman-reduce-un-75-los-tokens', 'prompt_content' => 'Nuevo', 'changelog' => 'x'],
            [
                'profession_slug' => 'desarrollo',
                'title' => 'Skill nueva',
                'description' => 'd',
                'prompt_content' => 'p',
                'tool_name' => 'Claude Code',
                'difficulty' => 'beginner',
            ],
        ])->expectsOutputToContain('Insertadas: 1 | Actualizadas: 1')->assertSuccessful();
    }
}
