<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_published_skills_only(): void
    {
        Skill::factory()->create(['title' => 'Visible', 'vote_score' => 5]);
        Skill::factory()->create(['title' => 'Borrador', 'status' => 'draft']);

        $this->get('/api/v1/skills')
            ->assertOk()
            ->assertJsonPath('meta.total', 1)
            ->assertJsonPath('data.0.title', 'Visible')
            ->assertJsonStructure(['data' => [['slug', 'title', 'description', 'profession', 'type', 'votes', 'url', 'skill_md_url']], 'meta' => ['total', 'page', 'last_page', 'next']]);
    }

    public function test_it_filters_by_query_and_profession(): void
    {
        $legal = Profession::factory()->create(['slug' => 'legal']);
        Skill::factory()->create(['title' => 'Revisar contratos', 'profession_id' => $legal->id]);
        Skill::factory()->create(['title' => 'Revisar contratos de marketing']);
        Skill::factory()->create(['title' => 'Otra cosa', 'profession_id' => $legal->id]);

        $this->get('/api/v1/skills?q=contratos&profession=legal')
            ->assertOk()
            ->assertJsonPath('meta.total', 1)
            ->assertJsonPath('data.0.profession', 'legal');
    }

    public function test_it_shows_a_skill_with_its_prompt_and_install_command(): void
    {
        $skill = Skill::factory()->create(['slug' => 'mi-skill', 'prompt_content' => 'Haz [esto]']);

        $this->get('/api/v1/skills/mi-skill')
            ->assertOk()
            ->assertJsonPath('data.prompt', 'Haz [esto]')
            ->assertJsonPath('data.install.name', 'mi-skill')
            ->assertJsonPath('data.author.url', route('authors.show', ['user' => $skill->author->username]));
    }

    public function test_drafts_are_404(): void
    {
        Skill::factory()->create(['slug' => 'secreta', 'status' => 'draft']);

        $this->get('/api/v1/skills/secreta')->assertNotFound();
    }

    public function test_validation_errors_are_json_even_without_accept_header(): void
    {
        $this->get('/api/v1/skills?limit=500')
            ->assertStatus(422)
            ->assertJsonValidationErrors('limit');
    }

    public function test_it_lists_professions(): void
    {
        Profession::factory()->create(['slug' => 'ventas', 'name' => 'Ventas']);

        $this->get('/api/v1/professions')
            ->assertOk()
            ->assertJsonPath('data.0.slug', 'ventas')
            ->assertJsonPath('data.0.url', route('professions.show', ['profession' => 'ventas']));
    }
}
