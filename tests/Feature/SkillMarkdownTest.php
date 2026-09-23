<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\SkillVersion;
use App\Support\SkillMarkdown;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * /skills/{slug}/skill.md (SKILL.md instalable) y el endpoint de versiones
 * que alimenta el diff del historial.
 */
class SkillMarkdownTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_serves_an_installable_skill_md(): void
    {
        $skill = Skill::factory()->create([
            'slug' => 'revisor-de-contratos',
            'title' => 'Revisor de contratos',
            'description' => 'Detecta cláusulas de riesgo: responsabilidad, "penalizaciones" y plazos.',
            'use_case' => 'Antes de firmar un contrato de la otra parte.',
            'prompt_content' => "Revisa este contrato:\n[pega aquí el contrato]",
        ]);

        $response = $this->get(route('skills.markdown', ['skill' => $skill->slug]))
            ->assertOk()
            ->assertHeader('X-Robots-Tag', 'noindex, follow');

        $this->assertStringStartsWith('text/markdown', $response->headers->get('Content-Type'));

        $body = $response->getContent();

        $this->assertStringStartsWith("---\nname: revisor-de-contratos\n", $body);
        // Comillas escapadas: la description no rompe el YAML.
        $this->assertStringContainsString('description: "Detecta cláusulas de riesgo: responsabilidad, \"penalizaciones\" y plazos. Úsalo cuando: Antes de firmar', $body);
        $this->assertStringContainsString('## Instrucciones', $body);
        $this->assertStringContainsString('[pega aquí el contrato]', $body);
        $this->assertStringContainsString('pídeselo antes de empezar', $body);
        $this->assertStringContainsString(route('skills.show', ['skill' => $skill->slug]), $body);
    }

    public function test_download_param_forces_attachment(): void
    {
        $skill = Skill::factory()->create(['slug' => 'mi-skill']);

        $this->get(route('skills.markdown', ['skill' => $skill->slug, 'download' => 1]))
            ->assertOk()
            ->assertHeader('Content-Disposition', 'attachment; filename="mi-skill-SKILL.md"');
    }

    public function test_drafts_are_not_served_to_guests(): void
    {
        $draft = Skill::factory()->create(['status' => 'draft']);

        $this->get(route('skills.markdown', ['skill' => $draft->slug]))->assertNotFound();

        $this->actingAs($draft->author)
            ->get(route('skills.markdown', ['skill' => $draft->slug]))
            ->assertOk()
            ->assertHeader('Cache-Control', 'no-store, private');
    }

    public function test_long_slugs_are_cut_to_64_chars_at_a_word_boundary(): void
    {
        $skill = Skill::factory()->make([
            'slug' => 'auditoria-seo-tecnica-completa-para-apps-y-webs-core-web-vitals-indexacion-js',
        ]);

        $name = SkillMarkdown::name($skill);

        $this->assertLessThanOrEqual(64, strlen($name));
        $this->assertSame('auditoria-seo-tecnica-completa-para-apps-y-webs-core-web-vitals', $name);
    }

    public function test_the_skill_page_exposes_the_install_command(): void
    {
        $skill = Skill::factory()->create(['slug' => 'mi-skill']);

        $this->get(route('skills.show', ['skill' => $skill->slug]))
            ->assertInertia(fn ($page) => $page
                ->where('install.name', 'mi-skill')
                ->where('install.prompt', fn ($p) => str_starts_with($p, 'Instala esta skill de ia-skills.com')
                    && str_ends_with($p, '- '.route('skills.markdown', ['skill' => 'mi-skill'])))
                ->where('install.command', 'mkdir -p ~/.claude/skills/mi-skill && curl -fsSL '
                    .route('skills.markdown', ['skill' => 'mi-skill']).' -o ~/.claude/skills/mi-skill/SKILL.md'));
    }

    public function test_version_endpoint_returns_the_version_and_the_previous_one(): void
    {
        $skill = Skill::factory()->create(['version' => 2, 'prompt_content' => 'v2']);

        SkillVersion::create(['skill_id' => $skill->id, 'user_id' => $skill->user_id, 'version' => 1, 'prompt_content' => 'v1', 'changelog' => 'Inicial']);
        SkillVersion::create(['skill_id' => $skill->id, 'user_id' => $skill->user_id, 'version' => 2, 'prompt_content' => 'v2', 'changelog' => 'Más contexto']);

        $this->getJson(route('skills.versions.show', ['skill' => $skill->slug, 'version' => 2]))
            ->assertOk()
            ->assertJson([
                'version' => 2,
                'changelog' => 'Más contexto',
                'prompt_content' => 'v2',
                'previous' => ['version' => 1, 'prompt_content' => 'v1'],
            ]);

        $this->getJson(route('skills.versions.show', ['skill' => $skill->slug, 'version' => 1]))
            ->assertOk()
            ->assertJsonPath('previous', null);

        $this->getJson(route('skills.versions.show', ['skill' => $skill->slug, 'version' => 9]))
            ->assertNotFound();
    }

    public function test_version_endpoint_hides_drafts_from_guests(): void
    {
        $draft = Skill::factory()->create(['status' => 'draft']);
        SkillVersion::create(['skill_id' => $draft->id, 'user_id' => $draft->user_id, 'version' => 1, 'prompt_content' => 'x']);

        $this->getJson(route('skills.versions.show', ['skill' => $draft->slug, 'version' => 1]))->assertNotFound();
    }
}
