<?php

namespace Tests\Feature;

use App\Support\SiteData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * La cabecera existe dos veces: AppLayout.vue (Inertia) y layouts/site.blade.php
 * (guías, HTML plano). Estaban duplicadas a mano y se desincronizaron —
 * "Guardadas" solo existía en la de Inertia y desaparecía al entrar en /guias.
 *
 * Ahora las dos leen de SiteData::primaryNav(). Estos tests comprueban que
 * siguen haciéndolo: el Blade renderizando los enlaces, y el layout de Inertia
 * recibiendo la lista como prop compartida (el nav de Vue se genera con un
 * v-for sobre ella, así que si la prop es correcta no hay nada que derive).
 */
class PrimaryNavTest extends TestCase
{
    use RefreshDatabase;

    public function test_primary_nav_includes_the_saved_skills_link(): void
    {
        $routes = array_column(SiteData::primaryNav(), 'route');

        $this->assertContains('skills.saved', $routes);
    }

    public function test_every_primary_nav_route_resolves(): void
    {
        foreach (SiteData::primaryNav() as $item) {
            $this->assertNotEmpty($item['href'], "La ruta {$item['route']} no resolvió a una URL.");
            $this->assertNotEmpty($item['label']);
        }
    }

    public function test_the_guides_layout_renders_every_primary_nav_link(): void
    {
        $response = $this->get(route('guides.index'))->assertOk();
        $html = $response->getContent();

        foreach (SiteData::primaryNav() as $item) {
            $this->assertStringContainsString(
                $item['href'],
                $html,
                "La cabecera de las guías no enlaza a {$item['route']}."
            );
            $this->assertStringContainsString(
                $item['label'],
                $html,
                "La cabecera de las guías no muestra «{$item['label']}»."
            );
        }
    }

    public function test_the_guides_layout_exposes_a_mobile_menu(): void
    {
        // Las guías no cargan Vue, así que el desplegable es <details> y tiene
        // que estar en el HTML del servidor para funcionar sin JavaScript.
        $html = $this->get(route('guides.index'))->assertOk()->getContent();

        $this->assertStringContainsString('<details', $html);
        $this->assertStringContainsString('Menú de navegación', $html);
    }

    public function test_inertia_pages_receive_the_same_nav(): void
    {
        $this->get(route('skills.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->has('nav.primary', count(SiteData::primaryNav()))
                ->where('nav.primary', SiteData::primaryNav()));
    }
}
