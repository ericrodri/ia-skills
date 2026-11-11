<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Las páginas Blade (guías, privacidad, MCP...) tienen que mostrar la misma
 * cabecera que las de Inertia: antes siempre salían como si no hubieras
 * entrado, también para un admin.
 */
class SiteLayoutHeaderTest extends TestCase
{
    use RefreshDatabase;

    public function test_sin_sesion_ofrece_entrar_y_registrarse(): void
    {
        $this->get(route('guides.index'))
            ->assertOk()
            ->assertSee(route('login'), false)
            ->assertSee(route('register'), false)
            ->assertDontSee('Cerrar sesión')
            ->assertDontSee('🛡 Admin');
    }

    public function test_con_sesion_muestra_el_menu_de_usuario(): void
    {
        $user = User::factory()->create(['name' => 'ana', 'username' => 'ana']);

        $this->actingAs($user)->get(route('guides.index'))
            ->assertOk()
            ->assertSee('+ Compartir skill')
            ->assertSee(route('dashboard'), false)
            ->assertSee(route('authors.show', ['user' => 'ana']), false)
            ->assertSee('Cerrar sesión')
            ->assertDontSee('🛡 Admin')
            ->assertDontSee('>Registrarse<', false);
    }

    public function test_un_admin_ve_el_acceso_a_admin(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)->get(route('legal.privacy'))
            ->assertOk()
            ->assertSee('🛡 Admin')
            ->assertSee(route('admin.skills.index'), false);
    }
}
