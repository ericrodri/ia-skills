<?php

namespace Tests\Feature;

use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * /mcp — la página que se comparte fuera (registro oficial de MCP, directorios).
 *
 * Lo importante: que nunca anuncie un comando que falla. Mientras el paquete
 * npm no esté disponible la página no existe, ni figura en el sitemap, ni se
 * enlaza desde ningún footer.
 */
class McpPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_page_does_not_exist_while_the_package_is_unavailable(): void
    {
        config(['distribution.mcp_enabled' => false]);

        $this->get('/mcp')->assertNotFound();
    }

    public function test_the_page_shows_the_working_command(): void
    {
        config(['distribution.mcp_enabled' => true]);

        $this->get(route('mcp'))
            ->assertOk()
            ->assertSee('ia-skills dentro de Claude Code')
            ->assertSee('claude mcp add ia-skills -- npx -y ia-skills mcp', false);
    }

    public function test_the_command_follows_the_package_name_in_config(): void
    {
        config(['distribution.mcp_enabled' => true, 'distribution.npm_package' => 'ia-skills-cli']);

        $this->get(route('mcp'))
            ->assertOk()
            ->assertSee('npx -y ia-skills-cli mcp', false)
            ->assertSee('npmjs.com/package/ia-skills-cli', false);
    }

    public function test_the_content_is_in_the_html_without_javascript(): void
    {
        // Es lo que leen los directorios y las previsualizaciones de enlaces.
        config(['distribution.mcp_enabled' => true]);
        Profession::factory()->create(['name' => 'Legal', 'slug' => 'legal']);

        $this->get(route('mcp'))
            ->assertOk()
            ->assertSee('Qué puede hacer Claude con él')
            ->assertSee('¿Qué datos envía?')
            ->assertSee(route('professions.show', ['profession' => 'legal']), false);
    }

    public function test_it_has_canonical_and_software_schema(): void
    {
        config(['distribution.mcp_enabled' => true]);

        $html = $this->get(route('mcp'))->assertOk()->getContent();

        $this->assertStringContainsString('<link rel="canonical" href="'.route('mcp').'"', $html);
        $this->assertStringContainsString('SoftwareApplication', $html);
        $this->assertStringNotContainsString('noindex', $html);
    }

    public function test_the_sitemap_only_lists_it_when_available(): void
    {
        config(['distribution.mcp_enabled' => false]);
        $this->assertStringNotContainsString(route('mcp'), $this->get(route('sitemap.pages'))->getContent());

        config(['distribution.mcp_enabled' => true]);
        $this->assertStringContainsString(route('mcp'), $this->get(route('sitemap.pages'))->getContent());
    }

    public function test_inertia_pages_only_link_it_when_available(): void
    {
        config(['distribution.mcp_enabled' => false]);
        $this->get(route('skills.index'))
            ->assertInertia(fn ($page) => $page->where('nav.mcp', null));

        config(['distribution.mcp_enabled' => true]);
        $this->get(route('skills.index'))
            ->assertInertia(fn ($page) => $page->where('nav.mcp', route('mcp')));
    }

    public function test_the_blade_footer_only_links_it_when_available(): void
    {
        config(['distribution.mcp_enabled' => false]);
        $this->assertStringNotContainsString(route('mcp'), $this->get(route('guides.index'))->getContent());

        config(['distribution.mcp_enabled' => true]);
        $this->assertStringContainsString(route('mcp'), $this->get(route('guides.index'))->getContent());
    }
}
