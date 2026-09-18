<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * El sitio debe vivir en un solo host.
 *
 * Con www sirviendo una copia completa en 200 y con canonical propio, las
 * ~3.100 URLs existían por duplicado y las señales se repartían entre dos
 * hosts. Estos tests fijan que eso no pueda volver silenciosamente.
 */
class CanonicalHostTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config(['app.url' => 'https://ia-skills.com']);
    }

    public function test_www_redirige_al_host_canonico_con_301(): void
    {
        $this->get('https://www.ia-skills.com/guias')
            ->assertStatus(301)
            ->assertRedirect('https://ia-skills.com/guias');
    }

    public function test_conserva_la_ruta_y_la_query(): void
    {
        $this->get('https://www.ia-skills.com/skills?profession=legal&page=2')
            ->assertStatus(301)
            ->assertRedirect('https://ia-skills.com/skills?profession=legal&page=2');
    }

    public function test_redirige_al_esquema_del_host_canonico_en_un_solo_salto(): void
    {
        // Llega por http: se salta el rebote intermedio y va directo a https.
        $this->get('http://www.ia-skills.com/')
            ->assertStatus(301)
            ->assertRedirect('https://ia-skills.com/');
    }

    public function test_un_post_conserva_el_metodo_con_308(): void
    {
        $this->post('https://www.ia-skills.com/login', [])
            ->assertStatus(308)
            ->assertRedirect('https://ia-skills.com/login');
    }

    public function test_el_host_canonico_no_se_redirige(): void
    {
        $this->get('https://ia-skills.com/guias')->assertOk();
    }

    public function test_otros_hosts_se_sirven_sin_tocar(): void
    {
        // Un dominio de staging o un túnel de desarrollo no debe acabar
        // rebotando contra producción.
        $this->get('http://localhost/guias')->assertOk();
    }
}
