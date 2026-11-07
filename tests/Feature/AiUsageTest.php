<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\User;
use App\Support\AiUsage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Uso de ia-skills por las IA (App\Support\AiUsage): métrica de producto.
 */
class AiUsageTest extends TestCase
{
    use RefreshDatabase;

    public function test_clasifica_asistentes_agentes_y_rastreadores(): void
    {
        $this->assertSame(
            ['agent' => 'ChatGPT', 'grp' => 'asistente', 'kind' => 'guia', 'path' => '/guias/como-usar-elevenlabs'],
            AiUsage::classify('Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', '/guias/como-usar-elevenlabs'),
        );
        $this->assertSame('agente', AiUsage::classify('ia-skills-cli/1.4.0', '/skills/x/skill.md')['grp']);
        $this->assertSame('Descarga directa (curl…)', AiUsage::classify('curl/8.5.0', '/skills/x/skill.md')['agent']);
        $this->assertSame(['agent' => 'Google y Gemini', 'grp' => 'indice', 'kind' => 'ficha', 'path' => ''],
            AiUsage::classify('Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '/skills/x'));
    }

    public function test_ignora_navegadores_estaticos_y_curl_fuera_de_skill_md(): void
    {
        $this->assertNull(AiUsage::classify('Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/156.0.0.0 Safari/537.36', '/guias/x'));
        $this->assertNull(AiUsage::classify('GPTBot/1.2', '/build/assets/app.js'));
        $this->assertNull(AiUsage::classify('curl/8.5.0', '/guias/x'));
        $this->assertNull(AiUsage::classify('', '/'));
    }

    public function test_cuenta_las_peticiones_reales_acumulando_en_la_misma_fila(): void
    {
        $guide = route('guides.show', ['slug' => 'como-usar-elevenlabs']);

        $this->withHeaders(['User-Agent' => 'Mozilla/5.0; compatible; Claude-User/1.0'])->get($guide)->assertOk();
        $this->withHeaders(['User-Agent' => 'Mozilla/5.0; compatible; Claude-User/1.0'])->get($guide)->assertOk();
        $this->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1)'])->get('/llms.txt')->assertOk();

        $this->assertSame(2, (int) DB::table('ai_hits')->where('agent', 'Claude')->value('hits'));
        $this->assertSame(1, DB::table('ai_hits')->where('agent', 'Claude')->count());
        $this->assertSame('llms', DB::table('ai_hits')->where('agent', 'Google y Gemini')->value('kind'));
    }

    public function test_las_personas_y_los_errores_no_cuentan(): void
    {
        $this->withHeaders(['User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/156.0.0.0 Safari/537.36'])->get('/guias');
        $this->withHeaders(['User-Agent' => 'GPTBot/1.2'])->get('/guias/no-existe')->assertNotFound();

        $this->assertSame(0, DB::table('ai_hits')->count());
    }

    public function test_el_panel_muestra_el_uso_por_ia(): void
    {
        DB::table('ai_hits')->insert([
            ['day' => now()->toDateString(), 'agent' => 'ChatGPT', 'grp' => 'asistente', 'kind' => 'guia', 'path' => '/guias/x', 'hits' => 3],
            ['day' => now()->toDateString(), 'agent' => 'CLI y MCP de ia-skills', 'grp' => 'agente', 'kind' => 'skill_md', 'path' => '', 'hits' => 2],
            ['day' => now()->toDateString(), 'agent' => 'Bing y Copilot', 'grp' => 'indice', 'kind' => 'ficha', 'path' => '', 'hits' => 10],
        ]);
        Skill::factory()->create(['installs_count' => 5]);

        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->get(route('admin.analytics', ['dias' => 7]))
            ->assertInertia(fn ($page) => $page
                ->where('report.ai.groups', ['asistente' => 3, 'agente' => 2, 'indice' => 10])
                ->where('report.ai.pages.0', ['label' => '/guias/x', 'hits' => 3])
                ->where('report.ai.installsTotal', 5)
                ->has('report.ai.topInstalled', 1));
    }
}
