<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\GoogleProvider;
use Laravel\Socialite\Two\User as GoogleUser;
use Mockery;
use Tests\TestCase;

/**
 * «Guardar» sin cuenta (App\Support\PendingSave) y entrar con Google
 * (App\Http\Controllers\Auth\GoogleController).
 */
class PendingSaveTest extends TestCase
{
    use RefreshDatabase;

    private const BROWSER = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36';

    private function hits(string $action): int
    {
        return (int) DB::table('skill_actions')->where('action', $action)->sum('hits');
    }

    public function test_registrarse_desde_guardar_vuelve_a_la_ficha_ya_guardada(): void
    {
        $skill = Skill::factory()->create(['title' => 'Prompt para un logo']);

        $this->get(route('register', ['guardar' => $skill->slug]))
            ->assertInertia(fn ($page) => $page->where('pendingSave', ['slug' => $skill->slug, 'title' => 'Prompt para un logo']));

        $this->post('/register', $this->formGuard() + [
            'name' => 'Ana',
            'email' => 'ana@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertRedirect(route('skills.show', $skill->slug, absolute: false))
            ->assertSessionHas('success');

        $user = User::firstWhere('email', 'ana@example.com');
        $this->assertTrue($user->hasSaved($skill));
        $this->assertNull($user->email_verified_at);
        $this->assertSame(1, $skill->fresh()->saves_count);
        $this->assertSame(1, $this->hits('registro_guardar'));
    }

    public function test_entrar_desde_guardar_tambien_la_guarda(): void
    {
        $skill = Skill::factory()->create();
        $user = User::factory()->create();

        $this->get(route('login', ['guardar' => $skill->slug]))
            ->assertInertia(fn ($page) => $page->where('pendingSave.slug', $skill->slug));

        $this->post('/login', ['email' => $user->email, 'password' => 'password'])
            ->assertRedirect(route('skills.show', $skill->slug, absolute: false));

        $this->assertTrue($user->fresh()->hasSaved($skill));
        $this->assertSame(1, $this->hits('entrar_guardar'));
    }

    public function test_una_ficha_que_no_existe_o_no_esta_publicada_no_se_apunta(): void
    {
        $draft = Skill::factory()->create(['status' => 'draft']);

        $this->get(route('register', ['guardar' => $draft->slug]))->assertInertia(fn ($page) => $page->where('pendingSave', null));
        $this->get(route('register', ['guardar' => 'no-existe']))->assertInertia(fn ($page) => $page->where('pendingSave', null));
    }

    public function test_guardar_no_exige_confirmar_el_email(): void
    {
        $skill = Skill::factory()->create();

        $this->actingAs(User::factory()->unverified()->create())
            ->postJson(route('skills.save', $skill->slug))
            ->assertOk()
            ->assertJson(['saved' => true]);
    }

    public function test_el_navegador_no_puede_apuntar_las_acciones_del_servidor(): void
    {
        $skill = Skill::factory()->create();
        $beacon = fn (string $a) => $this->withHeaders(['User-Agent' => self::BROWSER])->post(route('analytics.action'), ['s' => $skill->slug, 'a' => $a]);

        $beacon('guardar_sin_cuenta');
        $beacon('registro_guardar');

        $this->assertSame(1, $this->hits('guardar_sin_cuenta'));
        $this->assertSame(0, $this->hits('registro_guardar'));
    }

    public function test_sin_claves_de_google_no_hay_boton_ni_rutas(): void
    {
        config(['services.google.client_id' => null, 'services.google.client_secret' => null]);

        $this->get('/login')->assertInertia(fn ($page) => $page->where('googleLogin', false));
        $this->get('/auth/google')->assertNotFound();
    }

    private function fakeGoogle(string $id, string $email, bool $verified = true, string $name = 'Ana Pérez'): void
    {
        config(['services.google.client_id' => 'id', 'services.google.client_secret' => 'secret']);

        $user = (new GoogleUser)->setRaw(['sub' => $id, 'email' => $email, 'email_verified' => $verified])
            ->map(['id' => $id, 'name' => $name, 'email' => $email]);

        $provider = Mockery::mock(GoogleProvider::class);
        $provider->shouldReceive('user')->andReturn($user);
        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);
    }

    public function test_google_crea_la_cuenta_verificada_y_guarda_la_ficha_pendiente(): void
    {
        $skill = Skill::factory()->create();
        $this->get(route('register', ['guardar' => $skill->slug]));
        $this->fakeGoogle('g-1', 'Ana@Gmail.com');

        $this->get('/auth/google/callback')->assertRedirect(route('skills.show', $skill->slug, absolute: false));

        $user = User::firstWhere('email', 'ana@gmail.com');
        $this->assertAuthenticatedAs($user);
        $this->assertSame('g-1', $user->google_id);
        $this->assertSame('Ana Pérez', $user->name);
        $this->assertNotNull($user->email_verified_at);
        $this->assertTrue($user->hasSaved($skill));
        $this->assertSame(1, $this->hits('google_guardar'));
    }

    public function test_google_entra_en_la_cuenta_que_ya_tenia_ese_email(): void
    {
        $user = User::factory()->unverified()->create(['email' => 'ana@gmail.com', 'name' => 'Ana']);
        $this->fakeGoogle('g-2', 'ana@gmail.com');

        $this->get('/auth/google/callback')->assertRedirect(route('skills.saved', absolute: false));

        $this->assertAuthenticatedAs($user);
        $this->assertSame(1, User::count());
        $this->assertSame('g-2', $user->fresh()->google_id);
        $this->assertSame('Ana', $user->fresh()->name);
        $this->assertNotNull($user->fresh()->email_verified_at);
    }

    public function test_google_sin_email_verificado_no_entra(): void
    {
        $this->fakeGoogle('g-3', 'raro@example.com', verified: false);

        $this->get('/auth/google/callback')->assertRedirect(route('login'))->assertSessionHas('error');

        $this->assertGuest();
        $this->assertSame(0, User::count());
    }
}
