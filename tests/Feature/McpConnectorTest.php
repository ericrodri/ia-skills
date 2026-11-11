<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

/**
 * Conector MCP remoto (/api/mcp). Lo importante: sin clave solo se ve el
 * catálogo publicado y con clave, además, lo propio; nunca lo privado de otro.
 */
class McpConnectorTest extends TestCase
{
    use RefreshDatabase;

    private User $owner;

    private Skill $public;

    private Skill $private;

    private Skill $othersPrivate;

    private string $key;

    protected function setUp(): void
    {
        parent::setUp();

        $profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);
        $this->owner = User::factory()->create();
        $this->key = $this->owner->createApiToken();

        $this->public = Skill::factory()->create([
            'profession_id' => $profession->id, 'status' => 'published',
            'title' => 'Revisor de contratos público', 'slug' => 'revisor-publico', 'prompt_content' => 'Prompt público de contratos',
        ]);

        $this->private = $this->makePrivate($this->owner, 'Contratos internos del despacho', 'contratos-internos', 'Prompt privado de contratos');
        $this->othersPrivate = $this->makePrivate(User::factory()->create(), 'Contratos secretos de otra persona', 'contratos-ajenos', 'Prompt ajeno de contratos');
    }

    private function makePrivate(User $user, string $title, string $slug, string $prompt): Skill
    {
        $skill = Skill::factory()->make([
            'user_id' => $user->id, 'profession_id' => Profession::first()->id,
            'title' => $title, 'slug' => $slug, 'prompt_content' => $prompt, 'description' => $title,
        ]);
        $skill->makePrivate();
        $skill->save();

        return $skill;
    }

    private function rpc(string $method, array $params = [], ?string $key = null, int $id = 1): TestResponse
    {
        return $this->postJson($key ? "/api/mcp/{$key}" : '/api/mcp', ['jsonrpc' => '2.0', 'id' => $id, 'method' => $method, 'params' => $params]);
    }

    private function tool(string $tool, array $args, ?string $key = null): string
    {
        return $this->rpc('tools/call', ['name' => $tool, 'arguments' => $args], $key)
            ->assertOk()
            ->json('result.content.0.text');
    }

    public function test_inicializa_y_negocia_la_version(): void
    {
        $this->rpc('initialize', ['protocolVersion' => '2025-03-26', 'capabilities' => new \stdClass, 'clientInfo' => ['name' => 'claude', 'version' => '1']])
            ->assertOk()
            ->assertJsonPath('jsonrpc', '2.0')
            ->assertJsonPath('id', 1)
            ->assertJsonPath('result.protocolVersion', '2025-03-26')
            ->assertJsonPath('result.serverInfo.name', 'ia-skills')
            ->assertJsonStructure(['result' => ['capabilities' => ['tools']]]);

        $this->rpc('initialize', ['protocolVersion' => '1999-01-01'])->assertJsonPath('result.protocolVersion', '2025-06-18');

        // La notificación de después no lleva respuesta.
        $this->postJson('/api/mcp', ['jsonrpc' => '2.0', 'method' => 'notifications/initialized'])->assertStatus(202);

        $this->get('/api/mcp')->assertStatus(405);
        $this->rpc('nada/de/nada')->assertJsonPath('error.code', -32601);
    }

    public function test_sin_clave_solo_ve_el_catalogo_publico(): void
    {
        $tools = collect($this->rpc('tools/list')->json('result.tools'))->pluck('name')->all();
        $this->assertSame(['search_skills', 'get_skill'], $tools);

        $found = $this->tool('search_skills', ['query' => 'contratos']);
        $this->assertStringContainsString('revisor-publico', $found);
        $this->assertStringNotContainsString('contratos-internos', $found);
        $this->assertStringNotContainsString('contratos-ajenos', $found);

        $this->assertStringContainsString('Prompt público de contratos', $this->tool('get_skill', ['slug' => 'revisor-publico']));

        $this->rpc('tools/call', ['name' => 'get_skill', 'arguments' => ['slug' => 'contratos-internos']])
            ->assertJsonPath('result.isError', true);
        $this->rpc('tools/call', ['name' => 'my_skills', 'arguments' => []])
            ->assertJsonPath('error.code', -32602);
    }

    public function test_con_clave_ve_lo_suyo_y_nunca_lo_privado_de_otro(): void
    {
        $tools = collect($this->rpc('tools/list', [], $this->key)->json('result.tools'))->pluck('name')->all();
        $this->assertContains('my_skills', $tools);

        $found = $this->tool('search_skills', ['query' => 'contratos'], $this->key);
        $this->assertStringContainsString('contratos-internos', $found);
        $this->assertStringContainsString('revisor-publico', $found);
        $this->assertStringNotContainsString('contratos-ajenos', $found);

        $mine = $this->tool('my_skills', [], $this->key);
        $this->assertStringContainsString('contratos-internos', $mine);
        $this->assertStringContainsString('privada', $mine);
        $this->assertStringNotContainsString('contratos-ajenos', $mine);

        $full = $this->tool('get_skill', ['slug' => 'contratos-internos'], $this->key);
        $this->assertStringContainsString('Prompt privado de contratos', $full);
        $this->assertStringContainsString('token='.$this->private->access_token, $full);

        $this->rpc('tools/call', ['name' => 'get_skill', 'arguments' => ['slug' => 'contratos-ajenos']], $this->key)
            ->assertJsonPath('result.isError', true);

        $this->assertNotNull($this->owner->fresh()->api_token_last_used_at);
    }

    public function test_una_clave_invalida_o_regenerada_no_entra(): void
    {
        $this->rpc('tools/list', [], 'clave-inventada')->assertNotFound()->assertJsonPath('error.code', -32001);

        $old = $this->key;
        $this->owner->createApiToken();

        $this->rpc('tools/call', ['name' => 'my_skills', 'arguments' => []], $old)->assertNotFound();
    }
}
