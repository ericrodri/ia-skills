<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ApiTokenTest extends TestCase
{
    use RefreshDatabase;

    public function test_generated_token_is_stored_hashed_and_shown_only_once(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('profile.api-token.generate'))
            ->assertRedirect(route('profile.edit'));

        $plainTextToken = $response->getSession()->get('plainTextApiToken');

        $this->assertNotEmpty($plainTextToken);

        $user->refresh();

        // En la columna vive el hash, nunca el token.
        $this->assertNotSame($plainTextToken, $user->api_token);
        $this->assertSame(hash('sha256', $plainTextToken), $user->api_token);
        $this->assertSame(substr($plainTextToken, 0, 8), $user->api_token_prefix);

        // En el destino del redirect todavía se muestra, para poder copiarla.
        $this->actingAs($user)
            ->get(route('profile.edit'))
            ->assertInertia(fn ($page) => $page
                ->where('plainTextApiToken', $plainTextToken)
                ->where('hasApiToken', true)
                ->where('apiTokenPrefix', substr($plainTextToken, 0, 8)));

        // A partir de la siguiente carga ya no se expone el valor en claro.
        $this->actingAs($user)
            ->get(route('profile.edit'))
            ->assertInertia(fn ($page) => $page
                ->where('plainTextApiToken', null)
                ->where('hasApiToken', true)
                ->where('apiTokenPrefix', substr($plainTextToken, 0, 8)));
    }

    public function test_migration_hashes_pre_existing_plain_text_tokens(): void
    {
        // Volvemos al esquema anterior a la migración para reproducir el estado real.
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['api_token_prefix', 'api_token_last_used_at']);
        });

        $legacyToken = 'clave-en-claro-de-toda-la-vida';
        $user = User::factory()->create();
        DB::table('users')->where('id', $user->id)->update(['api_token' => $legacyToken]);

        (require database_path('migrations/2026_08_26_000001_hash_api_tokens.php'))->up();

        $migrated = DB::table('users')->where('id', $user->id)->first();

        $this->assertSame(hash('sha256', $legacyToken), $migrated->api_token);
        $this->assertSame(substr($legacyToken, 0, 8), $migrated->api_token_prefix);

        // La clave que ya estaban usando las integraciones sigue autenticando.
        $this->assertTrue(User::findByApiToken($legacyToken)->is($user));
    }

    public function test_api_token_is_never_serialized_with_the_user(): void
    {
        $user = User::factory()->create();
        $user->createApiToken();

        $this->assertArrayNotHasKey('api_token', $user->fresh()->toArray());
    }

    public function test_api_token_cannot_be_set_by_mass_assignment(): void
    {
        $user = User::factory()->create();

        $user->fill(['api_token' => 'token-inyectado'])->save();

        $this->assertNull($user->fresh()->api_token);
    }

    public function test_endpoint_authenticates_with_the_plain_text_token(): void
    {
        $user = User::factory()->create();
        $plainTextToken = $user->createApiToken();

        $profession = Profession::factory()->create();
        $skill = Skill::factory()->create([
            'profession_id' => $profession->id,
            'status' => 'published',
        ]);
        $user->savedSkills()->attach($skill->id);

        $this->getJson('/api/v1/saved-skills?api_key='.$plainTextToken)
            ->assertOk()
            ->assertJsonPath('total', 1)
            ->assertJsonPath('skills.0.title', $skill->title);

        $this->assertNotNull($user->fresh()->api_token_last_used_at);
    }

    public function test_endpoint_accepts_a_bearer_token(): void
    {
        $user = User::factory()->create();
        $plainTextToken = $user->createApiToken();

        $this->getJson('/api/v1/saved-skills', ['Authorization' => 'Bearer '.$plainTextToken])
            ->assertOk()
            ->assertJsonPath('total', 0);
    }

    public function test_endpoint_rejects_the_stored_hash_as_a_token(): void
    {
        $user = User::factory()->create();
        $user->createApiToken();

        // Aunque alguien filtrase la columna, su contenido no autentica.
        $this->getJson('/api/v1/saved-skills?api_key='.$user->fresh()->api_token)
            ->assertStatus(401);
    }

    public function test_endpoint_rejects_missing_and_invalid_tokens(): void
    {
        $this->getJson('/api/v1/saved-skills')->assertStatus(401);
        $this->getJson('/api/v1/saved-skills?api_key=noexiste')->assertStatus(401);
    }

    public function test_revoking_clears_the_token_and_its_metadata(): void
    {
        $user = User::factory()->create();
        $plainTextToken = $user->createApiToken();

        $this->actingAs($user)->delete(route('profile.api-token.revoke'))
            ->assertRedirect(route('profile.edit'));

        $user->refresh();

        $this->assertNull($user->api_token);
        $this->assertNull($user->api_token_prefix);

        $this->getJson('/api/v1/saved-skills?api_key='.$plainTextToken)->assertStatus(401);
    }

    public function test_regenerating_invalidates_the_previous_token(): void
    {
        $user = User::factory()->create();
        $firstToken = $user->createApiToken();
        $secondToken = $user->createApiToken();

        $this->assertNotSame($firstToken, $secondToken);

        $this->getJson('/api/v1/saved-skills?api_key='.$firstToken)->assertStatus(401);
        $this->getJson('/api/v1/saved-skills?api_key='.$secondToken)->assertOk();
    }
}
