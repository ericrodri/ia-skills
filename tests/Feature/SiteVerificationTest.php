<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_no_emite_etiquetas_de_verificacion_si_no_hay_token(): void
    {
        config(['services.site_verification' => ['google' => null, 'bing' => null]]);

        $this->get('/')
            ->assertOk()
            ->assertDontSee('google-site-verification', false)
            ->assertDontSee('msvalidate.01', false);
    }

    public function test_emite_la_etiqueta_cuando_el_token_esta_configurado(): void
    {
        config(['services.site_verification' => [
            'google' => 'token-de-google',
            'bing' => 'token-de-bing',
        ]]);

        $this->get('/')
            ->assertOk()
            ->assertSee('<meta name="google-site-verification" content="token-de-google">', false)
            ->assertSee('<meta name="msvalidate.01" content="token-de-bing">', false);
    }
}
