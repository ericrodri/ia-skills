<?php

namespace Tests\Feature;

use App\Http\Middleware\HandleInertiaRequests;
use App\Models\Skill;
use App\Models\User;
use App\Support\SearchMisses;
use App\Support\SkillSearch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Búsqueda del catálogo: sinónimos, sugerencias cuando no hay resultados y
 * registro de lo que no se encuentra (App\Support\SkillSearch y SearchMisses).
 * Los tests corren en SQLite, así que cubren el camino de respaldo con LIKE.
 */
class SearchImprovementsTest extends TestCase
{
    use RefreshDatabase;

    private const BROWSER = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36';

    /** Una búsqueda como la que hace la página mientras se escribe. */
    private function searchFromPage(string $q, string $agent = self::BROWSER, string $extra = '')
    {
        $version = app(HandleInertiaRequests::class)->version(Request::create('/'));

        return $this->withHeaders(array_filter([
            'User-Agent' => $agent,
            'X-Inertia' => 'true',
            'X-Inertia-Version' => $version,
        ]))->get('/skills?q='.urlencode($q).$extra);
    }

    public function test_los_sinonimos_encuentran_lo_que_el_catalogo_dice_de_otra_forma(): void
    {
        Skill::factory()->create(['title' => 'Resumen de historia clínica para salud', 'description' => 'Para consultas']);
        Skill::factory()->create(['title' => 'Plan de marketing', 'description' => 'Campañas']);

        $this->get('/skills?q=medicina')
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('skills.total', 1)
                ->where('skills.data.0.title', 'Resumen de historia clínica para salud')
                ->where('suggestions', []));
    }

    public function test_los_sinonimos_ignoran_tildes_y_mayusculas(): void
    {
        $this->assertSame(['enfermera', 'enfermero', 'salud', 'paciente'], SkillSearch::synonyms('Enfermería'));
        $this->assertSame([], SkillSearch::synonyms('flutter'));
    }

    public function test_sin_resultados_sugiere_fichas_que_coinciden_con_alguna_palabra(): void
    {
        $match = Skill::factory()->create(['title' => 'Quitar el fondo de una foto', 'description' => 'Recorte limpio']);
        Skill::factory()->create(['title' => 'Plan de marketing', 'description' => 'Campañas']);

        $this->get('/skills?q='.urlencode('fondo xyzzy'))
            ->assertInertia(fn ($page) => $page
                ->where('skills.total', 0)
                ->has('suggestions', 1)
                ->where('suggestions.0.slug', $match->slug));
    }

    public function test_si_ninguna_palabra_coincide_sugiere_las_mas_vistas(): void
    {
        Skill::factory()->create(['title' => 'Poco vista', 'views_count' => 1]);
        $top = Skill::factory()->create(['title' => 'Muy vista', 'views_count' => 500]);

        $this->get('/skills?q=zzzqqq')
            ->assertInertia(fn ($page) => $page
                ->where('skills.total', 0)
                ->has('suggestions', 2)
                ->where('suggestions.0.slug', $top->slug));
    }

    public function test_apunta_las_busquedas_sin_resultados_hechas_desde_la_pagina(): void
    {
        Skill::factory()->create(['title' => 'Plan de marketing']);

        $this->searchFromPage('MiniPlayTech  Suites')->assertOk();
        $this->searchFromPage('miniplaytech suites')->assertOk();
        // Con resultados no se apunta.
        $this->searchFromPage('marketing')->assertOk();

        $rows = DB::table('search_misses')->get();
        $this->assertCount(1, $rows);
        $this->assertSame('miniplaytech suites', $rows[0]->term);
        $this->assertSame(2, (int) $rows[0]->hits);
    }

    public function test_no_apunta_bots_admins_textos_cortos_ni_peticiones_sin_la_pagina(): void
    {
        // Sin la cabecera de Inertia (un enlace o un rastreador que ignora robots.txt).
        $this->withHeaders(['User-Agent' => self::BROWSER])->get('/skills?q=nadaqueencontrar')->assertOk();
        // Un bot que se declara.
        $this->searchFromPage('nadaqueencontrar', 'Mozilla/5.0 (compatible; bingbot/2.0)');
        // Muy corto: es alguien empezando a escribir.
        $this->searchFromPage('zq');
        // Con otro filtro, el vacío puede deberse al filtro.
        $this->searchFromPage('nadaqueencontrar', self::BROWSER, '&tool=Gemini')->assertOk();
        // El admin probando la búsqueda.
        $this->actingAs(User::factory()->create(['is_admin' => true]));
        $this->searchFromPage('nadaqueencontrar');

        $this->assertSame(0, DB::table('search_misses')->count());
    }

    public function test_el_informe_se_queda_con_el_texto_completo_y_no_con_lo_tecleado_a_medias(): void
    {
        $day = now()->toDateString();
        DB::table('search_misses')->insert([
            ['day' => $day, 'term' => 'miniplay', 'hits' => 1],
            ['day' => $day, 'term' => 'miniplaytech', 'hits' => 1],
            ['day' => $day, 'term' => 'miniplaytech suites', 'hits' => 3],
            ['day' => $day, 'term' => 'medicina', 'hits' => 2],
        ]);

        $this->assertSame(
            [['label' => 'miniplaytech suites', 'hits' => 3], ['label' => 'medicina', 'hits' => 2]],
            SearchMisses::report($day, $day),
        );
    }

    public function test_el_panel_muestra_las_busquedas_sin_resultados(): void
    {
        DB::table('search_misses')->insert(['day' => now()->toDateString(), 'term' => 'medicina', 'hits' => 4]);

        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->get(route('admin.analytics', ['dias' => 7]))
            ->assertInertia(fn ($page) => $page->where('report.searchMisses.0', ['label' => 'medicina', 'hits' => 4]));
    }

    public function test_feed_con_barra_redirige_al_feed_xml(): void
    {
        $this->get('/feed/')->assertStatus(301)->assertRedirect('/feed.xml');
        $this->get('/feed')->assertStatus(301)->assertRedirect('/feed.xml');
    }

    public function test_cuenta_los_clics_en_siguiente_paso(): void
    {
        $skill = Skill::factory()->create();

        $this->withHeaders(['User-Agent' => self::BROWSER])
            ->post(route('analytics.action'), ['s' => $skill->slug, 'a' => 'siguiente'])
            ->assertNoContent();

        $this->assertSame(1, (int) DB::table('skill_actions')->where('action', 'siguiente')->value('hits'));
    }
}
