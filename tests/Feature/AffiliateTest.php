<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\User;
use App\Support\Affiliates;
use App\Support\Analytics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Enlaces de afiliado (config/affiliates.php, App\Support\Affiliates).
 */
class AffiliateTest extends TestCase
{
    use RefreshDatabase;

    private const BROWSER = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36';

    public function test_ir_cuenta_el_clic_y_redirige_al_afiliado(): void
    {
        $this->withHeaders(['User-Agent' => self::BROWSER])
            ->get(route('affiliates.go', ['tool' => 'elevenlabs', 'desde' => '/skills/locucion']))
            ->assertRedirect(config('affiliates.elevenlabs.url'))
            ->assertHeader('X-Robots-Tag', 'noindex, nofollow');

        $this->assertDatabaseHas('affiliate_clicks', ['tool' => 'elevenlabs', 'from' => '/skills/locucion']);
    }

    public function test_una_herramienta_desconocida_da_404(): void
    {
        $this->get('/ir/no-existe')->assertNotFound();
    }

    public function test_los_bots_y_los_admins_redirigen_sin_contar(): void
    {
        $this->withHeaders(['User-Agent' => 'Googlebot/2.1'])->get('/ir/elevenlabs')->assertRedirect();
        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->withHeaders(['User-Agent' => self::BROWSER])->get('/ir/elevenlabs')->assertRedirect();

        $this->assertSame(0, DB::table('affiliate_clicks')->count());
    }

    public function test_un_origen_externo_no_se_guarda(): void
    {
        $this->withHeaders(['User-Agent' => self::BROWSER])->get('/ir/elevenlabs?desde=https://spam.example');

        $this->assertNull(DB::table('affiliate_clicks')->value('from'));
    }

    public function test_la_ficha_que_menciona_la_herramienta_muestra_el_recuadro(): void
    {
        $con = Skill::factory()->create(['prompt_content' => 'Genera la locución y pásala por ElevenLabs con una voz en español.']);
        $sin = Skill::factory()->create(['prompt_content' => 'Resume este documento en cinco puntos.', 'title' => 'Resumir documentos', 'description' => 'Resumen', 'tool_name' => 'Claude']);

        $this->get(route('skills.show', $con))->assertInertia(fn ($page) => $page
            ->where('affiliateTools.0.slug', 'elevenlabs')
            ->where('affiliateTools.0.href', route('affiliates.go', ['tool' => 'elevenlabs', 'desde' => '/skills/'.$con->slug]))
            ->where('affiliateDisclosure', Affiliates::DISCLOSURE));

        $this->get(route('skills.show', $sin))->assertInertia(fn ($page) => $page->where('affiliateTools', []));
    }

    public function test_la_guia_que_menciona_la_herramienta_muestra_el_recuadro_marcado(): void
    {
        $this->get(route('guides.show', ['slug' => 'convertir-texto-a-voz-con-ia']))
            ->assertOk()
            ->assertSee('/ir/elevenlabs?desde=', false)
            ->assertSee('rel="sponsored noopener"', false)
            ->assertSee('Enlace de afiliado');
    }

    public function test_el_informe_incluye_los_clics(): void
    {
        DB::table('affiliate_clicks')->insert([
            ['tool' => 'elevenlabs', 'day' => now()->toDateString(), 'from' => '/guias/x', 'created_at' => now()],
            ['tool' => 'elevenlabs', 'day' => now()->toDateString(), 'from' => '/guias/x', 'created_at' => now()],
        ]);

        $report = Analytics::report(7);

        $this->assertSame([['label' => 'elevenlabs', 'clicks' => 2]], $report['affiliates']['tools']);
        $this->assertSame('/guias/x', $report['affiliates']['pages'][0]['label']);
    }

    public function test_robots_txt_excluye_las_redirecciones(): void
    {
        $this->assertStringContainsString('Disallow: /ir/', file_get_contents(public_path('robots.txt')));
    }
}
