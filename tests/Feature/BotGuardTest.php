<?php

namespace Tests\Feature;

use App\Mail\NewsletterConfirmationMail;
use App\Models\User;
use App\Support\BotGuard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

/**
 * Filtro antibots de la newsletter y del registro (App\Support\BotGuard).
 */
class BotGuardTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    private function assertSilentlyIgnored(array $data, array $headers = []): void
    {
        $this->withHeaders($headers)
            ->post(route('newsletter.subscribe'), $data)
            ->assertSessionHas('newsletter_status', fn ($m) => str_contains($m, 'Te hemos enviado un email'));

        $this->assertDatabaseCount('newsletter_subscribers', 0);
        Mail::assertNothingSent();
    }

    public function test_sin_ficha_se_responde_como_un_alta_pero_no_se_guarda_nada(): void
    {
        $this->assertSilentlyIgnored(['email' => 'victima@example.com', 'source' => 'footer']);
    }

    public function test_una_ficha_manipulada_se_ignora(): void
    {
        $this->assertSilentlyIgnored(['email' => 'victima@example.com', BotGuard::FIELD => 'no-es-una-ficha']);
    }

    public function test_un_envio_en_menos_de_tres_segundos_se_ignora(): void
    {
        $this->assertSilentlyIgnored(['email' => 'victima@example.com', BotGuard::FIELD => BotGuard::token()]);
    }

    public function test_los_user_agents_imposibles_se_ignoran(): void
    {
        foreach ([
            '"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 Chrome/142.0.0.0 Safari/537.36"',
            'Mozilla/5.0 (compatible; MSIE 9.0; AOL 9.7; AOLBuild 4343.19; Windows NT 6.1; Trident/5.0)',
            'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1b2) Gecko/20060821 BonEcho/2.0b2',
        ] as $agent) {
            $this->assertSilentlyIgnored($this->formGuard() + ['email' => 'victima@example.com'], ['User-Agent' => $agent]);
        }
    }

    public function test_una_ficha_caducada_pide_recargar_la_pagina(): void
    {
        $this->post(route('newsletter.subscribe'), [
            'email' => 'ana@example.com',
            BotGuard::FIELD => BotGuard::token(time() - BotGuard::MAX_SECONDS - 10),
        ])->assertSessionHas('newsletter_error', true);

        Mail::assertNothingSent();
    }

    public function test_una_persona_con_navegador_actual_se_suscribe(): void
    {
        $this->withHeaders(['User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36'])
            ->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com']);

        $this->assertDatabaseHas('newsletter_subscribers', ['email' => 'ana@example.com']);
        Mail::assertSent(NewsletterConfirmationMail::class, 1);
    }

    public function test_no_se_reenvia_la_confirmacion_al_mismo_email_en_tres_dias(): void
    {
        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com']);
        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com']);

        Mail::assertSent(NewsletterConfirmationMail::class, 1);

        $this->travel(4)->days();
        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com']);

        Mail::assertSent(NewsletterConfirmationMail::class, 2);
    }

    public function test_hay_un_tope_diario_de_emails_de_confirmacion(): void
    {
        // Sin el límite por IP, que salta antes: aquí se prueba el tope global.
        $this->withoutMiddleware(ThrottleRequests::class);

        for ($i = 0; $i < 62; $i++) {
            $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => "p{$i}@example.com"]);
        }

        Mail::assertSent(NewsletterConfirmationMail::class, 60);
    }

    public function test_el_registro_de_un_bot_se_rechaza(): void
    {
        $this->post('/register', [
            'name' => 'Bot',
            'email' => 'victima@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertSessionHasErrors('email');

        $this->assertGuest();
        $this->assertSame(0, User::count());
    }

    public function test_las_paginas_inertia_comparten_la_ficha(): void
    {
        $this->get(route('register'))
            ->assertInertia(fn ($page) => $page->has('formToken'));
    }

    public function test_el_formulario_de_las_guias_lleva_la_ficha(): void
    {
        $this->get(route('guides.index'))->assertSee('name="'.BotGuard::FIELD.'"', false);
    }
}
