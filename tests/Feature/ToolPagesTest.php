<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Support\SiteData;
use App\Support\ToolPages;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Páginas por herramienta (/herramientas/{slug}): App\Support\ToolPages.
 */
class ToolPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_la_pagina_de_gemini_lista_sus_fichas_con_las_de_imagen_primero(): void
    {
        $image = Skill::factory()->create(['tool_name' => 'Gemini', 'title' => 'Prompt para cambiar el fondo de una foto', 'views_count' => 10]);
        $other = Skill::factory()->create(['tool_name' => 'Gemini', 'title' => 'Prompt para resumir un informe', 'views_count' => 99]);
        Skill::factory()->create(['tool_name' => 'ChatGPT', 'title' => 'Prompt para mejorar una foto']);
        Skill::factory()->create(['tool_name' => 'Gemini', 'title' => 'Borrador de Gemini', 'status' => 'draft']);

        $this->get('/herramientas/gemini')
            ->assertOk()
            ->assertSee('<link rel="canonical" href="'.route('tools.show', ['slug' => 'gemini']).'">', false)
            ->assertSee('"@type":"FAQPage"', false)
            ->assertInertia(fn ($page) => $page
                ->component('Tools/Show')
                ->where('tool.count', 2)
                ->has('images', 1)
                ->where('images.0.slug', $image->slug)
                ->has('others', 1)
                ->where('others.0.slug', $other->slug)
                ->has('otherTools', 2));
    }

    public function test_herramienta_desconocida_o_sin_fichas_da_404(): void
    {
        $this->get('/herramientas/midjourney')->assertNotFound();
        $this->get('/herramientas/gemini')->assertNotFound();
    }

    public function test_el_indice_lista_las_herramientas_con_su_recuento(): void
    {
        Skill::factory()->count(2)->create(['tool_name' => 'ChatGPT']);

        $this->get('/herramientas')
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Tools/Index')
                ->has('tools', count(ToolPages::all()))
                ->where('tools.1.slug', 'chatgpt')
                ->where('tools.1.count', 2));
    }

    public function test_el_copy_cumple_los_limites_de_seo(): void
    {
        foreach (ToolPages::all() as $tool) {
            $title = str_replace(':count', '999', $tool['seoTitle']);
            $this->assertLessThanOrEqual(53, mb_strlen($title), "seoTitle de {$tool['slug']}");
            $this->assertLessThanOrEqual(158, mb_strlen($tool['description']), "description de {$tool['slug']}");
            $this->assertNotEmpty($tool['faq'], "faq de {$tool['slug']}");
        }
    }

    public function test_menu_sitemap_y_llms_enlazan_las_paginas(): void
    {
        Skill::factory()->create(['tool_name' => 'Gemini']);

        $this->assertContains('tools.index', array_column(SiteData::primaryNav(), 'route'));
        $this->assertNotContains('rankings.index', array_column(SiteData::primaryNav(), 'route'));

        $this->get(route('sitemap.pages'))->assertOk()->assertSee(route('tools.show', ['slug' => 'gemini']), false);
        $this->get('/llms.txt')->assertOk()->assertSee(route('tools.show', ['slug' => 'chatgpt']), false);
    }

    public function test_la_etiqueta_de_herramienta_sabe_a_que_pagina_enlazar(): void
    {
        $this->get('/herramientas')->assertInertia(fn ($page) => $page
            ->where('nav.tools.Gemini', 'gemini')
            ->where('nav.tools.ChatGPT', 'chatgpt')
            ->where('nav.tools.Claude', 'claude'));
    }
}
