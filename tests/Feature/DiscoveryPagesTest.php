<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\Collections;
use App\Support\Guides;
use App\Support\ProfessionTasks;
use App\Support\RelatedContent;
use App\Support\SkillTemplates;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Colecciones, landings profesión × tarea, enlazado guías ↔ skills y
 * plantillas de contribución.
 */
class DiscoveryPagesTest extends TestCase
{
    use RefreshDatabase;

    /** Las profesiones reales (seeders): los JSON editoriales las referencian por slug. */
    private const PROFESSIONS = ['marketing', 'desarrollo', 'diseno', 'ventas', 'product-management', 'rrhh', 'finanzas', 'legal', 'customer-support', 'freelancers'];

    public function test_every_collection_points_to_a_known_profession(): void
    {
        $this->assertNotEmpty(Collections::all());

        foreach (Collections::all() as $c) {
            $this->assertContains($c['profession'], self::PROFESSIONS, $c['slug']);
            $this->assertNotEmpty($c['skills'], $c['slug']);
            $this->assertMatchesRegularExpression('/^[a-z0-9-]+$/', $c['slug']);
        }
    }

    public function test_a_collection_lists_its_published_skills_in_order(): void
    {
        $collection = Collections::all()[0];
        $profession = Profession::factory()->create(['slug' => $collection['profession']]);
        [$first, $second, $third] = array_slice($collection['skills'], 0, 3);

        // Creadas en orden inverso: la página debe respetar el orden del JSON.
        Skill::factory()->create(['slug' => $second, 'profession_id' => $profession->id]);
        Skill::factory()->create(['slug' => $first, 'profession_id' => $profession->id]);
        Skill::factory()->create(['slug' => $third, 'profession_id' => $profession->id, 'status' => 'draft']);

        $this->get(route('collections.show', ['slug' => $collection['slug']]))
            ->assertOk()
            ->assertSee('"@type":"CollectionPage"', false)
            ->assertInertia(fn ($page) => $page
                ->component('Collections/Show')
                ->has('skills', 2)
                ->where('skills.0.slug', $first)
                ->where('skills.1.slug', $second)
                ->where('installScript', fn ($script) => substr_count($script, "\n") === 1 && str_contains($script, "/skills/{$first}/skill.md"))
                ->where('installPrompt', fn ($prompt) => str_starts_with($prompt, 'Instala estas 2 skills de ia-skills.com')
                    && str_contains($prompt, '- '.route('skills.markdown', ['skill' => $first]))
                    && ! str_contains($prompt, "/skills/{$third}/")));
    }

    public function test_a_collection_without_published_skills_is_404(): void
    {
        $this->get(route('collections.show', ['slug' => Collections::all()[0]['slug']]))->assertNotFound();
        $this->get(route('collections.show', ['slug' => 'no-existe']))->assertNotFound();
    }

    public function test_collections_index_renders(): void
    {
        $this->get(route('collections.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->has('collections', count(Collections::all())));
    }

    public function test_every_task_belongs_to_a_known_profession_and_has_terms(): void
    {
        foreach (ProfessionTasks::all() as $profession => $tasks) {
            $this->assertContains($profession, self::PROFESSIONS);

            foreach ($tasks as $task) {
                $this->assertNotEmpty($task['terms'], "{$profession}/{$task['slug']}");
                $this->assertNotEmpty($task['intro']);
            }
        }
    }

    public function test_task_landing_lists_matching_skills_only(): void
    {
        $profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal']);
        Skill::factory()->count(ProfessionTasks::MIN_SKILLS)->sequence(fn ($s) => ['title' => "Revisar contrato {$s->index}"])->create(['profession_id' => $profession->id]);
        Skill::factory()->create(['profession_id' => $profession->id, 'title' => 'Otra cosa', 'description' => 'Nada que ver']);

        $this->get(route('professions.task', ['profession' => 'legal', 'task' => 'contratos']))
            ->assertOk()
            ->assertDontSee('noindex', false)
            ->assertInertia(fn ($page) => $page
                ->component('Professions/Task')
                ->where('skills.total', ProfessionTasks::MIN_SKILLS));

        // Y la profesión la enlaza.
        $this->get(route('professions.show', ['profession' => 'legal']))
            ->assertInertia(fn ($page) => $page->where('tasks.0.slug', 'contratos'));
    }

    public function test_a_thin_task_landing_is_noindex_and_not_linked(): void
    {
        $profession = Profession::factory()->create(['slug' => 'legal']);
        Skill::factory()->create(['profession_id' => $profession->id, 'title' => 'Un contrato']);

        $this->get(route('professions.task', ['profession' => 'legal', 'task' => 'contratos']))
            ->assertOk()
            ->assertSee('name="robots" content="noindex, follow"', false);

        $this->get(route('professions.show', ['profession' => 'legal']))
            ->assertInertia(fn ($page) => $page->has('tasks', 0));
    }

    public function test_unknown_task_is_404(): void
    {
        Profession::factory()->create(['slug' => 'legal']);

        $this->get('/profesiones/legal/no-existe')->assertNotFound();
    }

    public function test_every_mapped_guide_exists(): void
    {
        foreach (RelatedContent::mappedGuideSlugs() as $slug) {
            $this->assertNotNull(Guides::find($slug), "RelatedContent mapea una guía inexistente: {$slug}");
        }
    }

    public function test_every_guide_is_mapped(): void
    {
        $unmapped = array_diff(array_column(Guides::all(), 'slug'), RelatedContent::mappedGuideSlugs());

        $this->assertSame([], array_values($unmapped), 'Añade las guías nuevas a RelatedContent::GUIDES');
    }

    public function test_guide_page_links_to_related_skills(): void
    {
        $profession = Profession::factory()->create(['slug' => 'marketing']);
        $skill = Skill::factory()->create(['profession_id' => $profession->id, 'title' => 'Auditoría SEO express']);

        $this->get(route('guides.show', ['slug' => 'auditoria-seo-tecnica']))
            ->assertOk()
            ->assertSee('Skills para ponerlo en práctica')
            ->assertSee(route('skills.show', ['skill' => $skill->slug]), false);
    }

    public function test_skill_page_links_to_guides_and_neighbours(): void
    {
        $profession = Profession::factory()->create(['slug' => 'legal']);
        $skills = Skill::factory()->count(3)->create(['profession_id' => $profession->id]);

        $this->get(route('skills.show', ['skill' => $skills[1]->slug]))
            ->assertOk()
            ->assertSee(route('skills.show', ['skill' => $skills[2]->slug]), false)
            ->assertInertia(fn ($page) => $page
                ->has('guides', 2)
                ->has('neighbours', 2)
                // Las vecinas van por id con vuelta al principio.
                ->where('neighbours.0.slug', $skills[2]->slug)
                ->where('neighbours.1.slug', $skills[0]->slug));
    }

    public function test_create_form_offers_the_templates(): void
    {
        $this->assertNotEmpty(SkillTemplates::all());

        foreach (SkillTemplates::all() as $t) {
            $this->assertTrue($t['profession'] === null || in_array($t['profession'], self::PROFESSIONS, true), $t['key']);
            $this->assertStringContainsString('[', $t['prompt_content'], $t['key']);
        }

        $this->actingAs(User::factory()->create())
            ->get(route('skills.create'))
            ->assertInertia(fn ($page) => $page->has('templates', count(SkillTemplates::all())));
    }

    public function test_index_can_sort_by_saves_and_only_offers_tools_in_use(): void
    {
        Skill::factory()->create(['title' => 'Poco guardada', 'saves_count' => 1, 'vote_score' => 50, 'tool_name' => 'Claude']);
        Skill::factory()->create(['title' => 'Muy guardada', 'saves_count' => 90, 'vote_score' => 1, 'tool_name' => 'Claude']);

        $this->get(route('skills.index', ['sort' => 'saved']))
            ->assertSee('name="robots" content="noindex, follow"', false)
            ->assertInertia(fn ($page) => $page
                ->where('skills.data.0.title', 'Muy guardada')
                ->where('tools', ['Claude']));
    }

    public function test_sitemap_lists_the_new_pages(): void
    {
        $author = User::factory()->create();
        Skill::factory()->create(['user_id' => $author->id]);

        $this->get(route('sitemap'))->assertOk()->assertSee(route('sitemap.authors'), false);
        $this->get(route('sitemap.pages'))
            ->assertSee(route('rankings.index'), false)
            ->assertSee(route('collections.show', ['slug' => Collections::all()[0]['slug']]), false);
        $this->get(route('sitemap.authors'))->assertSee(route('authors.show', ['user' => $author->username]), false);
    }
}
