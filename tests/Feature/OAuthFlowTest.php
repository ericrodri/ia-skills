<?php

namespace Tests\Feature;

use App\Models\OAuthAuthCode;
use App\Models\OAuthClient;
use App\Models\OAuthToken;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\OAuth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

/**
 * OAuth del conector de Claude (App\Support\OAuth). Recorre el flujo que
 * hace Claude —registrarse, pedir permiso, canjear el código y llamar al
 * conector— y los abusos que tiene que rechazar.
 */
class OAuthFlowTest extends TestCase
{
    use RefreshDatabase;

    private const CALLBACK = 'https://claude.ai/api/mcp/auth_callback';

    private const VERIFIER = 'un-verificador-pkce-suficientemente-largo-de-prueba-1234567890';

    private User $owner;

    protected function setUp(): void
    {
        parent::setUp();

        $profession = Profession::factory()->create(['slug' => 'legal', 'is_active' => true]);
        $this->owner = User::factory()->create(['name' => 'Ana']);

        $private = Skill::factory()->make([
            'user_id' => $this->owner->id, 'profession_id' => $profession->id,
            'title' => 'Contratos internos', 'slug' => 'contratos-internos', 'prompt_content' => 'Prompt privado de Ana',
        ]);
        $private->makePrivate();
        $private->save();
    }

    private function challenge(string $verifier = self::VERIFIER): string
    {
        return rtrim(strtr(base64_encode(hash('sha256', $verifier, true)), '+/', '-_'), '=');
    }

    private function registerClient(array $overrides = []): array
    {
        return $this->postJson('/api/oauth/register', array_merge([
            'client_name' => 'Claude',
            'redirect_uris' => [self::CALLBACK],
            'grant_types' => ['authorization_code', 'refresh_token'],
            'token_endpoint_auth_method' => 'none',
        ], $overrides))->assertCreated()->json();
    }

    private function authorizeParams(string $clientId, array $overrides = []): array
    {
        return array_merge([
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => self::CALLBACK,
            'state' => 'estado-123',
            'scope' => OAuth::SCOPE,
            'code_challenge' => $this->challenge(),
            'code_challenge_method' => 'S256',
            'resource' => url('/api/mcp'),
        ], $overrides);
    }

    /** Da permiso y devuelve el código de la redirección. */
    private function approve(string $clientId, array $overrides = []): string
    {
        $response = $this->actingAs($this->owner)
            ->post(route('oauth.authorize.decide'), $this->authorizeParams($clientId, $overrides) + ['decision' => 'approve'])
            ->assertRedirect();

        parse_str(parse_url($response->headers->get('Location'), PHP_URL_QUERY), $query);
        $this->assertSame('estado-123', $query['state']);
        $this->assertSame(OAuth::issuer(), $query['iss']);

        return $query['code'];
    }

    private function exchange(string $clientId, string $code, array $overrides = []): TestResponse
    {
        $this->app['auth']->forgetGuards();

        return $this->post('/api/oauth/token', array_merge([
            'grant_type' => 'authorization_code',
            'client_id' => $clientId,
            'code' => $code,
            'redirect_uri' => self::CALLBACK,
            'code_verifier' => self::VERIFIER,
            'resource' => url('/api/mcp'),
        ], $overrides));
    }

    private function mcp(string $token, string $tool = 'my_skills'): TestResponse
    {
        return $this->withHeader('Authorization', "Bearer {$token}")
            ->postJson('/api/mcp', ['jsonrpc' => '2.0', 'id' => 1, 'method' => 'tools/call', 'params' => ['name' => $tool, 'arguments' => []]]);
    }

    public function test_publica_los_metadatos(): void
    {
        $this->getJson('/.well-known/oauth-protected-resource/api/mcp')
            ->assertOk()
            ->assertJsonPath('resource', url('/api/mcp'))
            ->assertJsonPath('authorization_servers.0', OAuth::issuer());

        $this->getJson('/.well-known/oauth-protected-resource')->assertOk();

        $this->getJson('/.well-known/oauth-authorization-server')
            ->assertOk()
            ->assertJsonPath('issuer', OAuth::issuer())
            ->assertJsonPath('authorization_endpoint', route('oauth.authorize'))
            ->assertJsonPath('token_endpoint', route('oauth.token'))
            ->assertJsonPath('registration_endpoint', route('oauth.register'))
            ->assertJsonPath('code_challenge_methods_supported', ['S256']);
    }

    public function test_flujo_completo_como_lo_hace_claude(): void
    {
        $client = $this->registerClient();
        $this->assertArrayNotHasKey('client_secret', $client);

        // Sin sesión, la pantalla de permiso manda a iniciar sesión...
        $this->get(route('oauth.authorize', $this->authorizeParams($client['client_id'])))->assertRedirect(route('login'));

        // ...y el login devuelve a ella con una visita completa (no es Inertia).
        $location = $this->withHeader('X-Inertia', 'true')
            ->post(route('login'), ['email' => $this->owner->email, 'password' => 'password'])
            ->assertStatus(409)
            ->headers->get('X-Inertia-Location');
        $this->flushHeaders();
        $this->assertStringStartsWith(route('oauth.authorize').'?', $location);
        $this->assertStringContainsString('client_id='.$client['client_id'], $location);

        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams($client['client_id'])))
            ->assertOk()
            ->assertSee('Claude')
            ->assertSee('claude.ai')
            ->assertSee('noindex', false);

        $code = $this->approve($client['client_id']);

        $tokens = $this->exchange($client['client_id'], $code)
            ->assertOk()
            ->assertHeader('Cache-Control', 'no-store, private')
            ->assertJsonPath('token_type', 'Bearer')
            ->assertJsonPath('scope', OAuth::SCOPE)
            ->json();

        // Con el token, el conector ve las privadas de quien dio permiso.
        $this->mcp($tokens['access_token'])->assertOk()->assertSee('contratos-internos');

        // Solo se guarda el resumen del token.
        $this->assertDatabaseMissing('oauth_tokens', ['access_hash' => $tokens['access_token']]);

        // Renovar rota el par: el anterior deja de valer.
        $renewed = $this->post('/api/oauth/token', [
            'grant_type' => 'refresh_token', 'client_id' => $client['client_id'], 'refresh_token' => $tokens['refresh_token'],
        ])->assertOk()->json();

        $this->mcp($renewed['access_token'])->assertOk()->assertSee('contratos-internos');
        $this->mcp($tokens['access_token'])->assertUnauthorized();
        $this->post('/api/oauth/token', [
            'grant_type' => 'refresh_token', 'client_id' => $client['client_id'], 'refresh_token' => $tokens['refresh_token'],
        ])->assertStatus(400)->assertJsonPath('error', 'invalid_grant');
    }

    public function test_un_codigo_solo_vale_una_vez_y_con_su_verificador(): void
    {
        $client = $this->registerClient();

        $code = $this->approve($client['client_id']);
        $this->exchange($client['client_id'], $code, ['code_verifier' => str_repeat('x', 50)])->assertStatus(400)->assertJsonPath('error', 'invalid_grant');
        // Tras un intento fallido, el código ya no sirve ni con el verificador bueno.
        $this->exchange($client['client_id'], $code)->assertStatus(400);

        $code = $this->approve($client['client_id']);
        $this->exchange($client['client_id'], $code)->assertOk();
        $this->exchange($client['client_id'], $code)->assertStatus(400);

        // Otro cliente no puede canjear un código ajeno.
        $other = $this->registerClient(['client_name' => 'Otra']);
        $code = $this->approve($client['client_id']);
        $this->exchange($other['client_id'], $code)->assertStatus(400);

        // Caducado.
        $code = $this->approve($client['client_id']);
        OAuthAuthCode::query()->update(['expires_at' => now()->subMinute()]);
        $this->exchange($client['client_id'], $code)->assertStatus(400);
    }

    public function test_rechaza_direcciones_de_vuelta_que_no_son_suyas(): void
    {
        // Al registrarse: nada de http fuera de la propia máquina ni otros esquemas.
        foreach (['http://evil.example/cb', 'javascript:alert(1)', 'https://claude.ai/cb#x'] as $bad) {
            $this->postJson('/api/oauth/register', ['redirect_uris' => [$bad]])->assertStatus(400);
        }
        $this->postJson('/api/oauth/register', ['redirect_uris' => []])->assertStatus(400);

        $client = $this->registerClient();

        // En la pantalla de permiso: se muestra el error aquí, sin redirigir a la dirección trucada.
        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams($client['client_id'], ['redirect_uri' => 'https://evil.example/cb'])))
            ->assertOk()
            ->assertSee('No se puede completar la conexión');

        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams('no-existe')))
            ->assertOk()
            ->assertSee('No se puede completar la conexión');

        // Sin PKCE, vuelve a la aplicación con el error.
        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams($client['client_id'], ['code_challenge' => null])))
            ->assertRedirectContains('error=invalid_request');

        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams($client['client_id'], ['scope' => 'admin'])))
            ->assertRedirectContains('error=invalid_scope');

        $this->actingAs($this->owner)
            ->get(route('oauth.authorize', $this->authorizeParams($client['client_id'], ['resource' => 'https://otra-web.example/mcp'])))
            ->assertRedirectContains('error=invalid_target');
    }

    public function test_claude_code_puede_volver_a_cualquier_puerto_local(): void
    {
        $client = $this->registerClient(['redirect_uris' => ['http://localhost/callback']]);
        $callback = 'http://localhost:53682/callback';

        $response = $this->actingAs($this->owner)
            ->post(route('oauth.authorize.decide'), $this->authorizeParams($client['client_id'], ['redirect_uri' => $callback]) + ['decision' => 'approve'])
            ->assertRedirect();

        $this->assertStringStartsWith($callback.'?code=', $response->headers->get('Location'));
    }

    public function test_cancelar_devuelve_access_denied_y_no_crea_nada(): void
    {
        $client = $this->registerClient();

        $this->actingAs($this->owner)
            ->post(route('oauth.authorize.decide'), $this->authorizeParams($client['client_id']) + ['decision' => 'deny'])
            ->assertRedirectContains('error=access_denied');

        $this->assertSame(0, OAuthAuthCode::count());
    }

    public function test_un_cliente_con_secreto_tiene_que_enviarlo(): void
    {
        $client = $this->registerClient(['token_endpoint_auth_method' => 'client_secret_post']);
        $this->assertNotEmpty($client['client_secret']);

        $code = $this->approve($client['client_id']);
        $this->exchange($client['client_id'], $code)->assertStatus(401)->assertJsonPath('error', 'invalid_client');

        $code = $this->approve($client['client_id']);
        $this->exchange($client['client_id'], $code, ['client_secret' => $client['client_secret']])->assertOk();
    }

    public function test_token_invalido_pide_volver_a_autenticarse_y_desconectar_corta_el_acceso(): void
    {
        $this->mcp('token-inventado')
            ->assertUnauthorized()
            ->assertHeader('WWW-Authenticate');

        $client = $this->registerClient();
        $tokens = $this->exchange($client['client_id'], $this->approve($client['client_id']))->json();

        // Caducado.
        OAuthToken::query()->update(['access_expires_at' => now()->subMinute()]);
        $this->mcp($tokens['access_token'])->assertUnauthorized();
        OAuthToken::query()->update(['access_expires_at' => now()->addHour()]);
        $this->mcp($tokens['access_token'])->assertOk();

        // La aplicación aparece en el perfil y desconectarla borra sus tokens.
        $this->actingAs($this->owner)->get(route('profile.edit'))
            ->assertInertia(fn ($page) => $page->where('connectedApps.0.name', 'Claude')->where('connectedApps.0.host', 'claude.ai'));

        $id = OAuthClient::where('client_id', $client['client_id'])->value('id');
        $this->actingAs(User::factory()->create())->delete(route('profile.apps.disconnect', $id));
        $this->assertSame(1, OAuthToken::count());

        $this->actingAs($this->owner)->delete(route('profile.apps.disconnect', $id))->assertRedirect();
        $this->app['auth']->forgetGuards();
        $this->mcp($tokens['access_token'])->assertUnauthorized();
    }

    public function test_revocar_por_la_api(): void
    {
        $client = $this->registerClient();
        $tokens = $this->exchange($client['client_id'], $this->approve($client['client_id']))->json();

        $this->post('/api/oauth/revoke', ['client_id' => $client['client_id'], 'token' => $tokens['refresh_token']])->assertOk();
        $this->mcp($tokens['access_token'])->assertUnauthorized();

        // Un token desconocido también responde 200 (RFC 7009).
        $this->post('/api/oauth/revoke', ['client_id' => $client['client_id'], 'token' => 'nada'])->assertOk();
    }

    public function test_la_direccion_de_cuenta_exige_iniciar_sesion(): void
    {
        $response = $this->postJson('/api/mcp/cuenta', ['jsonrpc' => '2.0', 'id' => 1, 'method' => 'tools/list'])->assertUnauthorized();
        $this->assertStringContainsString('/.well-known/oauth-protected-resource/api/mcp/cuenta', $response->headers->get('WWW-Authenticate'));

        $this->getJson('/.well-known/oauth-protected-resource/api/mcp/cuenta')->assertOk()->assertJsonPath('resource', url('/api/mcp/cuenta'));

        $client = $this->registerClient();
        $code = $this->approve($client['client_id'], ['resource' => url('/api/mcp/cuenta')]);
        $token = $this->exchange($client['client_id'], $code, ['resource' => url('/api/mcp/cuenta')])->assertOk()->json('access_token');

        $this->withHeader('Authorization', "Bearer {$token}")
            ->postJson('/api/mcp/cuenta', ['jsonrpc' => '2.0', 'id' => 1, 'method' => 'tools/call', 'params' => ['name' => 'my_skills', 'arguments' => []]])
            ->assertOk()
            ->assertSee('contratos-internos');
    }

    public function test_sin_token_sigue_funcionando_el_catalogo_publico(): void
    {
        $this->postJson('/api/mcp', ['jsonrpc' => '2.0', 'id' => 1, 'method' => 'tools/list'])
            ->assertOk()
            ->assertJsonCount(2, 'result.tools');
    }
}
