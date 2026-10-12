<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Contador de instalaciones: cada descarga del SKILL.md, venga de la web, del
 * CLI o del servidor MCP.
 *
 * Es la única métrica del catálogo que no viene sembrada por los seeders, así
 * que lo que se protege aquí es precisamente que no se pueda inflar sin querer.
 */
class InstallCounterTest extends TestCase
{
    use RefreshDatabase;

    private function skill(array $attributes = []): Skill
    {
        return Skill::factory()->create(array_merge([
            'profession_id' => Profession::factory(),
            'status' => 'published',
            'installs_count' => 0,
        ], $attributes));
    }

    private function download(Skill $skill, string $userAgent = 'curl/8.4.0', string $ip = '203.0.113.10')
    {
        return $this->withServerVariables(['REMOTE_ADDR' => $ip])
            ->withHeaders(['User-Agent' => $userAgent])
            ->get(route('skills.markdown', $skill));
    }

    public function test_downloading_the_skill_md_counts_an_install(): void
    {
        $skill = $this->skill();

        $this->download($skill)->assertOk();

        $this->assertSame(1, $skill->fresh()->installs_count);
    }

    public function test_the_cli_and_the_mcp_server_count(): void
    {
        $skill = $this->skill();

        $this->download($skill, 'ia-skills-cli/0.1')->assertOk();

        $this->assertSame(1, $skill->fresh()->installs_count);
    }

    public function test_the_same_origin_only_counts_once_a_day(): void
    {
        $skill = $this->skill();

        $this->download($skill);
        $this->download($skill);
        $this->download($skill);

        $this->assertSame(1, $skill->fresh()->installs_count);
    }

    public function test_different_origins_count_separately(): void
    {
        $skill = $this->skill();

        $this->download($skill, ip: '203.0.113.10');
        $this->download($skill, ip: '198.51.100.7');

        $this->assertSame(2, $skill->fresh()->installs_count);
    }

    public function test_crawlers_do_not_count(): void
    {
        $skill = $this->skill();

        foreach (['Googlebot/2.1', 'facebookexternalhit/1.1', 'SomeCrawler', 'HeadlessChrome'] as $i => $agent) {
            $this->download($skill, $agent, '203.0.113.'.(20 + $i))->assertOk();
        }

        $this->assertSame(0, $skill->fresh()->installs_count);
    }

    public function test_a_request_without_user_agent_does_not_count(): void
    {
        $skill = $this->skill();

        $this->download($skill, '', '203.0.113.99')->assertOk();

        $this->assertSame(0, $skill->fresh()->installs_count);
    }

    public function test_a_draft_is_served_to_its_author_but_does_not_count(): void
    {
        $author = User::factory()->create();
        $skill = $this->skill(['status' => 'draft', 'user_id' => $author->id]);

        $this->actingAs($author);
        $this->download($skill)->assertOk();

        $this->assertSame(0, $skill->fresh()->installs_count);
    }

    public function test_the_api_exposes_the_counter(): void
    {
        $skill = $this->skill();
        $this->download($skill);

        $this->getJson(route('api.skills.show', $skill))
            ->assertOk()
            ->assertJsonPath('data.installs', 1);
    }

    public function test_the_skill_page_offers_the_mcp_command(): void
    {
        $skill = $this->skill();

        $this->get(route('skills.show', $skill))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('install.mcp', 'claude mcp add ia-skills -- npx -y ia-skills mcp'));
    }
}
