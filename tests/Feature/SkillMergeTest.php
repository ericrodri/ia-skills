<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\SkillMerger;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Fusión de fichas duplicadas (App\Support\SkillMerger).
 */
class SkillMergeTest extends TestCase
{
    use RefreshDatabase;

    private Profession $profession;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profession = Profession::factory()->create();
    }

    private function skill(string $title, array $attributes = []): Skill
    {
        return Skill::factory()->create(['profession_id' => $this->profession->id, 'title' => $title, 'status' => 'published'] + $attributes);
    }

    public function test_a_merged_skill_redirects_permanently_to_the_one_that_stays(): void
    {
        $keep = $this->skill('Automatización de procesos de RRHH con IA');
        $dup = $this->skill('Automatización de procesos de RRHH');

        SkillMerger::merge($dup, $keep);

        $this->get(route('skills.show', $dup->slug))->assertStatus(301)->assertRedirect(route('skills.show', $keep->slug));
        $this->get(route('skills.markdown', $dup->slug).'?download=1')
            ->assertStatus(301)
            ->assertRedirect(route('skills.markdown', ['skill' => $keep->slug, 'download' => 1]));

        $this->assertSame('merged', $dup->fresh()->status);
        $this->assertFalse(Skill::published()->whereKey($dup->id)->exists());
    }

    public function test_comments_saves_and_votes_move_to_the_skill_that_stays(): void
    {
        $keep = $this->skill('Plan de onboarding 30-60-90 días', ['installs_count' => 2, 'vote_score' => 5]);
        $dup = $this->skill('Plan de onboarding 30/60/90 días personalizado', ['installs_count' => 3, 'vote_score' => 9]);
        $ana = User::factory()->create();
        $luis = User::factory()->create();

        Comment::create(['skill_id' => $dup->id, 'user_id' => $ana->id, 'content' => 'Muy útil']);
        DB::table('saved_skills')->insert([
            ['user_id' => $ana->id, 'skill_id' => $dup->id, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => $luis->id, 'skill_id' => $dup->id, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => $luis->id, 'skill_id' => $keep->id, 'created_at' => now(), 'updated_at' => now()],
        ]);

        SkillMerger::merge($dup, $keep);

        $this->assertSame(1, Comment::where('skill_id', $keep->id)->count());
        $this->assertSame(2, DB::table('saved_skills')->where('skill_id', $keep->id)->count());
        $this->assertSame(0, DB::table('saved_skills')->where('skill_id', $dup->id)->count());
        $this->assertSame(5, $keep->fresh()->installs_count);
        $this->assertSame(9, $keep->fresh()->vote_score);
    }

    public function test_earlier_merges_point_straight_to_the_final_skill(): void
    {
        $a = $this->skill('Ficha A');
        $b = $this->skill('Ficha B');
        $c = $this->skill('Ficha C');

        SkillMerger::merge($a, $b);
        SkillMerger::merge($b, $c);

        $this->assertSame($c->id, $a->fresh()->merged_into_id);
        $this->get(route('skills.show', $a->slug))->assertRedirect(route('skills.show', $c->slug));
    }

    public function test_duplicate_groups_keep_the_most_complete_skill(): void
    {
        $short = $this->skill('Diseño accesible WCAG', ['prompt_content' => 'corto']);
        $long = $this->skill('Diseño accesible (WCAG 2.2)', ['prompt_content' => str_repeat('largo ', 50)]);
        $this->skill('Investigación de usuarios con entrevistas');
        Skill::factory()->create(['title' => 'Diseño accesible WCAG', 'status' => 'published']); // otra profesión

        $groups = SkillMerger::duplicateGroups(0.6);

        $this->assertCount(1, $groups);
        $this->assertTrue($groups[0]['keep']->is($long));
        $this->assertTrue($groups[0]['merge'][0]->is($short));
    }

    public function test_same_topic_with_a_different_subtitle_counts_as_duplicate(): void
    {
        $this->skill('Infraestructura como código con Terraform', ['prompt_content' => 'corto']);
        $this->skill('Infraestructura como código con Terraform: gestiona la nube sin tocar la consola', ['prompt_content' => str_repeat('largo ', 40)]);
        // Mismas palabras, distinto tema: no se tocan.
        $this->skill('De empleado a freelance');
        $this->skill('IA como empleado del freelance: delegar tareas al asistente');

        $groups = SkillMerger::duplicateGroups();

        $this->assertCount(1, $groups);
        $this->assertStringContainsString('gestiona la nube', $groups[0]['keep']->title);
    }

    public function test_the_export_writes_import_files_instead_of_merging(): void
    {
        $this->skill('Sales playbook', ['slug' => 'sales-playbook', 'prompt_content' => str_repeat('x ', 50)]);
        $dup = $this->skill('Sales playbook: el manual del equipo', ['slug' => 'sales-playbook-manual', 'prompt_content' => 'x']);
        $dir = sys_get_temp_dir().'/merge-export-'.uniqid();

        $this->artisan('skills:merge-duplicates', ['--export' => $dir])->assertSuccessful();

        $files = glob($dir.'/*.json');
        $this->assertCount(1, $files);
        $this->assertSame([['slug' => 'sales-playbook-manual', 'merge_into' => 'sales-playbook']], json_decode(file_get_contents($files[0]), true));
        $this->assertSame('published', $dup->fresh()->status);
    }

    public function test_the_command_only_lists_without_apply(): void
    {
        $this->skill('Relaciones con los medios y PR');
        $dup = $this->skill('PR y relaciones con los medios');

        $this->artisan('skills:merge-duplicates', ['--threshold' => 0.6])
            ->expectsOutputToContain('1 grupos, 1 fichas a fusionar.')
            ->assertSuccessful();
        $this->assertSame('published', $dup->fresh()->status);

        $this->artisan('skills:merge-duplicates', ['--threshold' => 0.6, '--apply' => true])->assertSuccessful();
        $this->assertSame(1, Skill::where('status', 'merged')->count());
    }
}
