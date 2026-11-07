<?php

namespace Tests\Feature;

use App\Models\PageView;
use App\Models\User;
use App\Support\Analytics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Analítica propia (App\Support\Analytics).
 */
class AnalyticsTest extends TestCase
{
    use RefreshDatabase;

    private const BROWSER = 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.0 Mobile/15E148 Safari/604.1';

    private function hit(array $data, string $agent = self::BROWSER)
    {
        return $this->withHeaders(['User-Agent' => $agent])->post(route('analytics.collect'), $data);
    }

    public function test_registra_una_visita_sin_guardar_la_ip(): void
    {
        $this->hit(['p' => '/guias/que-es-nano-banana?utm_source=Newsletter', 'r' => 'https://www.google.es/'])->assertNoContent();

        $view = PageView::sole();
        $this->assertSame('/guias/que-es-nano-banana', $view->path);
        $this->assertSame('google', $view->referrer);
        $this->assertSame('newsletter', $view->utm_source);
        $this->assertSame('mobile', $view->device);
        $this->assertSame(16, strlen($view->visitor));
        $this->assertStringNotContainsString('127.0.0.1', json_encode($view->toArray()));
    }

    public function test_no_necesita_token_csrf(): void
    {
        // sendBeacon no puede mandar el token: la ruta está exenta.
        $this->withHeaders(['User-Agent' => self::BROWSER])
            ->post(route('analytics.collect'), ['p' => '/'])
            ->assertNoContent();

        $this->assertSame(1, PageView::count());
    }

    public function test_los_bots_y_los_admins_no_cuentan(): void
    {
        $this->hit(['p' => '/'], 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)')->assertNoContent();
        $this->hit(['p' => '/'], '');

        $admin = User::factory()->create(['is_admin' => true]);
        $this->actingAs($admin)->hit(['p' => '/']);

        $this->assertSame(0, PageView::count());
    }

    public function test_descarta_rutas_que_no_son_contenido_o_no_validas(): void
    {
        foreach (['/admin/analitica', '/skills/x/skill.md', '/login', 'https://otra.com/', '//otra.com', ''] as $path) {
            $this->hit(['p' => $path])->assertNoContent();
        }

        $this->assertSame(0, PageView::count());
    }

    public function test_la_procedencia_interna_no_cuenta_como_web_externa(): void
    {
        $this->assertNull(Analytics::source('http://localhost/guias', 'localhost'));
        $this->assertNull(Analytics::source('', 'ia-skills.com'));
        $this->assertNull(Analytics::source('https://www.ia-skills.com/x', 'ia-skills.com'));
        $this->assertSame('chatgpt', Analytics::source('https://chatgpt.com/', 'ia-skills.com'));
        $this->assertSame('ejemplo.org', Analytics::source('https://www.ejemplo.org/a', 'ia-skills.com'));
    }

    public function test_el_mismo_visitante_cuenta_una_vez_al_dia(): void
    {
        $this->hit(['p' => '/']);
        $this->hit(['p' => '/guias']);

        $report = Analytics::report(7);

        $this->assertSame(2, $report['totals']['views']);
        $this->assertSame(1, $report['totals']['visitors']);
        $this->assertCount(7, $report['series']);
    }

    public function test_el_panel_es_solo_para_admins(): void
    {
        $this->get(route('admin.analytics'))->assertRedirect(route('login'));

        $this->actingAs(User::factory()->create())->get(route('admin.analytics'))->assertForbidden();

        $this->hit(['p' => '/guias', 'r' => 'https://www.bing.com/']);

        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->get(route('admin.analytics', ['dias' => 7]))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Analytics')
                ->where('report.days', 7)
                ->where('report.totals.views', 1)
                ->where('report.pages.0.label', '/guias')
                ->where('report.sources.0.label', 'bing'));
    }

    public function test_las_visitas_antiguas_se_podan(): void
    {
        PageView::create(['day' => now()->subMonths(26)->toDateString(), 'path' => '/', 'visitor' => str_repeat('a', 16), 'device' => 'desktop']);
        PageView::create(['day' => now()->toDateString(), 'path' => '/', 'visitor' => str_repeat('b', 16), 'device' => 'desktop']);

        $this->artisan('model:prune', ['--model' => [PageView::class]]);

        $this->assertSame(1, PageView::count());
    }
}
