<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SpanishTitlesAndMailTest extends TestCase
{
    use RefreshDatabase;

    public function test_el_correo_de_verificacion_sale_en_espanol(): void
    {
        $mail = (new VerifyEmail)->toMail(User::factory()->create());

        $this->assertSame('Confirma tu correo en ia-skills', $mail->subject);
        $this->assertSame('Confirmar mi correo', $mail->actionText);
        $this->assertStringContainsString('Pulsa el botón', (string) $mail->introLines[0]);
    }

    public function test_el_correo_de_contrasena_sale_en_espanol(): void
    {
        $mail = (new ResetPassword('token'))->toMail(User::factory()->create());

        $this->assertSame('Cambia tu contraseña de ia-skills', $mail->subject);
        $this->assertSame('Elegir contraseña nueva', $mail->actionText);
    }

    public function test_inertia_recibe_el_titulo_seo_del_servidor(): void
    {
        Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);

        $response = $this->get(route('professions.show', ['profession' => 'legal']))->assertOk();

        preg_match('#<title inertia>([^<]+)</title>#', $response->getContent(), $m);
        $response->assertInertia(fn ($page) => $page->where('seoTitle', html_entity_decode($m[1])));
    }

    public function test_sin_seo_del_servidor_no_hay_titulo_seo(): void
    {
        $this->actingAs(User::factory()->create())
            ->get(route('profile.edit'))
            ->assertInertia(fn ($page) => $page->where('seoTitle', null));
    }
}
