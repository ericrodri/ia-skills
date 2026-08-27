<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Support\Guides;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Cubre lo que un crawler debe encontrar en el HTML inicial.
 *
 * La app es una SPA con Inertia sin SSR: si estos metadatos dejan de
 * renderizarse en servidor, todas las URLs vuelven a compartir el mismo título
 * genérico y el problema no se nota hasta semanas después en Search Console.
 */
class SeoTest extends TestCase
{
    use RefreshDatabase;

    private Profession $profession;

    private Skill $skill;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profession = Profession::factory()->create([
            'name' => 'Marketing',
            'slug' => 'marketing',
            'is_active' => true,
        ]);

        $this->skill = Skill::factory()->create([
            'profession_id' => $this->profession->id,
            'title' => 'Auditoría SEO en diez minutos',
            'slug' => 'auditoria-seo-en-diez-minutos',
            'description' => 'Revisa los problemas técnicos que bloquean la indexación de un sitio.',
            'prompt_content' => 'Actúa como SEO técnico y audita [URL].',
            'status' => 'published',
        ]);
    }

    public function test_la_portada_declara_idioma_titulo_descripcion_y_canonical(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('<html lang="es"', false)
            ->assertSee('<meta name="description"', false)
            ->assertSee('rel="canonical" href="'.route('home').'"', false)
            ->assertSee('Prompts y skills de IA para profesionales', false);
    }

    public function test_la_ficha_de_skill_emite_su_propio_titulo_y_el_prompt_en_json_ld(): void
    {
        $response = $this->get(route('skills.show', ['skill' => $this->skill->slug]));

        $response->assertOk()
            ->assertSee('Auditoría SEO en diez minutos', false)
            ->assertSee('application/ld+json', false)
            ->assertSee('"@type":"HowTo"', false)
            // El prompt completo viaja en el HTML inicial, no solo tras ejecutar JS.
            ->assertSee('Actúa como SEO técnico y audita [URL].', false)
            ->assertSee(route('og.skill', ['skill' => $this->skill->slug]), false);
    }

    public function test_una_skill_no_publicada_se_marca_noindex(): void
    {
        $draft = Skill::factory()->create([
            'profession_id' => $this->profession->id,
            'status' => 'draft',
            'slug' => 'borrador-privado',
        ]);

        $this->actingAs($draft->author)
            ->get(route('skills.show', ['skill' => $draft->slug]))
            ->assertOk()
            ->assertSee('name="robots" content="noindex, nofollow"', false);
    }

    public function test_la_busqueda_interna_no_se_indexa(): void
    {
        $this->get(route('skills.index', ['q' => 'seo']))
            ->assertOk()
            ->assertSee('name="robots" content="noindex, follow"', false);
    }

    public function test_el_filtro_por_profesion_canonicaliza_hacia_su_landing(): void
    {
        $this->get(route('skills.index', ['profession' => 'marketing']))
            ->assertOk()
            ->assertSee('rel="canonical" href="'.route('professions.show', ['profession' => 'marketing']).'"', false);
    }

    public function test_la_landing_de_profesion_emite_faqpage(): void
    {
        $this->get(route('professions.show', ['profession' => 'marketing']))
            ->assertOk()
            ->assertSee('"@type":"FAQPage"', false)
            ->assertSee('"@type":"BreadcrumbList"', false);
    }

    public function test_el_sitemap_indice_lista_los_sitemaps_por_tipo(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/xml; charset=utf-8')
            ->assertSee('<sitemapindex', false)
            ->assertSee(route('sitemap.pages'), false)
            ->assertSee(route('sitemap.professions'), false)
            ->assertSee(route('sitemap.guides'), false)
            ->assertSee(route('sitemap.skills', ['page' => 1]), false);
    }

    public function test_los_sitemaps_por_tipo_responden_y_contienen_urls(): void
    {
        $this->get('/sitemap-paginas.xml')->assertOk()->assertSee(route('guides.index'), false);
        $this->get('/sitemap-profesiones.xml')->assertOk()->assertSee(route('professions.show', ['profession' => 'marketing']), false);
        $this->get('/sitemap-guias.xml')->assertOk()->assertSee('/guias/', false);
        $this->get('/sitemap-skills-1.xml')->assertOk()->assertSee($this->skill->slug, false);
    }

    public function test_el_sitemap_no_se_rompe_si_una_fila_no_tiene_fecha(): void
    {
        // Una sola fila con updated_at nulo tumbaba el sitemap completo con un 500.
        Skill::withoutTimestamps(fn () => Skill::where('id', $this->skill->id)
            ->update(['updated_at' => null]));

        $this->get('/sitemap-skills-1.xml')->assertOk();
    }

    public function test_el_feed_rss_publica_las_ultimas_skills(): void
    {
        $this->get('/feed.xml')
            ->assertOk()
            ->assertSee('<rss', false)
            ->assertSee('Auditoría SEO en diez minutos', false);
    }

    public function test_las_guias_se_sirven_como_html_con_contenido_y_article(): void
    {
        $this->get('/guias')
            ->assertOk()
            ->assertSee('Guías de IA para profesionales', false)
            ->assertSee('"@type":"CollectionPage"', false);

        $this->get('/guias/que-son-los-skills-de-claude-code')
            ->assertOk()
            ->assertSee('<h1', false)
            ->assertSee('"@type":"Article"', false)
            ->assertSee('"@type":"FAQPage"', false);
    }

    public function test_una_guia_inexistente_devuelve_404(): void
    {
        $this->get('/guias/esta-guia-no-existe')->assertNotFound();
    }

    public function test_todas_las_guias_registradas_responden_con_metadatos_completos(): void
    {
        foreach (Guides::all() as $guide) {
            $this->get('/guias/'.$guide['slug'])
                ->assertOk()
                ->assertSee('<h1', false)
                ->assertSee('"@type":"Article"', false)
                ->assertSee('rel="canonical"', false);
        }
    }

    public function test_el_indice_de_guias_lista_todas_las_guias_publicadas(): void
    {
        $response = $this->get('/guias')->assertOk();

        foreach (Guides::all() as $guide) {
            $response->assertSee(route('guides.show', ['slug' => $guide['slug']]), false);
        }
    }

    public function test_llms_txt_indexa_guias_profesiones_y_paginas_clave(): void
    {
        $this->get('/llms.txt')
            ->assertOk()
            ->assertHeader('Content-Type', 'text/plain; charset=utf-8')
            ->assertSee('# ia-skills', false)
            ->assertSee(route('guides.show', ['slug' => 'que-es-un-agente-de-ia']), false)
            ->assertSee(route('professions.show', ['profession' => 'marketing']), false)
            ->assertSee(route('sitemap'), false);
    }

    /**
     * El sitemap fallaba en producción solo a partir de la segunda petición: la
     * primera poblaba el caché y las siguientes leían un objeto corrupto. Los
     * tests corren con el store `array`, así que esto no reproduce el fallo de
     * PostgreSQL, pero sí detecta cualquier valor cacheado con una forma que la
     * vista no sepa recorrer.
     */
    public function test_las_rutas_cacheadas_sobreviven_a_la_segunda_peticion(): void
    {
        foreach (['/', '/sitemap.xml', '/sitemap-skills-1.xml', '/sitemap-profesiones.xml', '/feed.xml'] as $url) {
            $this->get($url)->assertOk();
            $this->get($url)->assertOk();
        }
    }
}
