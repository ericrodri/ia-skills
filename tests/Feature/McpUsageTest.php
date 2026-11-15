<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\McpUsage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class McpUsageTest extends TestCase
{
    use RefreshDatabase;

    private Profession $profession;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);
        Skill::factory()->create([
            'profession_id' => $this->profession->id, 'status' => 'published',
            'title' => 'Revisor de contratos', 'slug' => 'revisor-de-contratos', 'prompt_content' => 'Revisa este contrato',
        ]);
    }

    private function rpc(string $method, array $params = [], ?string $key = null, string $agent = 'claude-code/2.1.325 (cli)'): TestResponse
    {
        return $this->withHeaders(['User-Agent' => $agent])
            ->postJson($key ? "/api/mcp/{$key}" : '/api/mcp', ['jsonrpc' => '2.0', 'id' => 1, 'method' => $method, 'params' => $params]);
    }

    private function hits(array $where): int
    {
        return (int) DB::table('mcp_usage')->where($where)->sum('hits');
    }

    public function test_cuenta_conexiones_busquedas_y_lecturas_anonimas(): void
    {
        $this->rpc('initialize', ['protocolVersion' => '2025-06-18'])->assertOk();
        $this->rpc('tools/list')->assertOk();
        $this->rpc('tools/call', ['name' => 'search_skills', 'arguments' => ['query' => '  Revisar CONTRATOS ']])->assertOk();
        $this->rpc('tools/call', ['name' => 'search_skills', 'arguments' => ['query' => 'revisar contratos']])->assertOk();
        $this->rpc('tools/call', ['name' => 'get_skill', 'arguments' => ['slug' => 'revisor-de-contratos']])->assertOk();

        $this->assertSame(1, $this->hits(['action' => 'conectar', 'client' => 'claude-code', 'access' => 'anonimo']));
        $this->assertSame(2, $this->hits(['action' => 'buscar', 'subject' => 'revisar contratos']));
        $this->assertSame(1, $this->hits(['action' => 'leer', 'subject' => 'revisor-de-contratos']));
        $this->assertSame(0, $this->hits(['action' => 'tools/list']));
    }

    public function test_no_guarda_el_slug_de_una_skill_privada_ni_inexistente(): void
    {
        $owner = User::factory()->create();
        $key = $owner->createApiToken();
        $private = Skill::factory()->make([
            'user_id' => $owner->id, 'profession_id' => $this->profession->id,
            'title' => 'Contratos internos', 'slug' => 'contratos-internos', 'prompt_content' => 'x', 'description' => 'x',
        ]);
        $private->makePrivate();
        $private->save();

        $this->rpc('tools/call', ['name' => 'get_skill', 'arguments' => ['slug' => 'contratos-internos']], $key)->assertOk();
        $this->rpc('tools/call', ['name' => 'get_skill', 'arguments' => ['slug' => 'no-existe']])->assertOk();

        $this->assertSame(0, DB::table('mcp_usage')->where('subject', 'contratos-internos')->count());
        $this->assertSame(1, $this->hits(['action' => 'leer', 'subject' => '', 'access' => 'cuenta']));
        $this->assertSame(1, $this->hits(['action' => 'leer', 'subject' => '', 'access' => 'anonimo']));
    }

    public function test_separa_el_uso_de_los_administradores(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $key = $admin->createApiToken();

        $this->rpc('initialize', [], $key)->assertOk();
        $this->rpc('initialize', [], null, 'curl/8.5.0')->assertOk();

        $report = McpUsage::report(now()->toDateString(), now()->toDateString());

        $this->assertSame(1, $report['access']['propio']);
        $this->assertSame(1, $report['actions']['conectar']);
        $this->assertSame([['label' => 'curl', 'hits' => 1]], $report['clients']);
    }

    public function test_el_cliente_es_la_primera_palabra_del_user_agent(): void
    {
        $this->assertSame('claude-code', McpUsage::client('claude-code/2.1.321 (claude-desktop, agent-sdk/0.3.321)'));
        $this->assertSame('claude-user', McpUsage::client('Claude-User (claude-code/1.0; +https://support.anthropic.com/)'));
        $this->assertSame('python-httpx', McpUsage::client('python-httpx/0.28.1'));
        $this->assertSame('desconocido', McpUsage::client(''));
    }

    public function test_el_panel_muestra_el_uso_del_mcp(): void
    {
        $this->rpc('tools/call', ['name' => 'search_skills', 'arguments' => ['query' => 'contratos']])->assertOk();

        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->get(route('admin.analytics', ['dias' => 7]))
            ->assertInertia(fn ($page) => $page
                ->where('report.mcp.actions.buscar', 1)
                ->where('report.mcp.searches.0', ['label' => 'contratos', 'hits' => 1]));
    }
}
