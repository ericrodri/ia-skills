<?php

namespace Tests\Feature;

use App\Mail\NewsletterConfirmationMail;
use App\Mail\ProfessionPackMail;
use App\Models\NewsletterSubscriber;
use App\Models\Profession;
use App\Models\Skill;
use App\Support\ThemePack;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

/**
 * Pack temático de fotos a cambio del email (App\Support\ThemePack).
 */
class ThemePackTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
    }

    /** Una ficha que enlaza la guía de prompts para editar fotos. */
    private function photoSkill(array $attributes = []): Skill
    {
        $slug = ThemePack::slugs(ThemePack::find('fotos'))[0];

        return Skill::factory()->create(['slug' => $slug, ...$attributes]);
    }

    public function test_el_pack_sale_de_las_fichas_que_enlaza_la_guia(): void
    {
        $slugs = ThemePack::slugs(ThemePack::find('fotos'));

        $this->assertGreaterThanOrEqual(25, count($slugs));
        $this->assertContains('prompt-para-hacer-una-foto-clon-con-ia-salir-dos-o-tres-veces-en-la-misma-foto', $slugs);
    }

    public function test_pedir_el_pack_desde_una_ficha_manda_la_confirmacion_con_el_pack(): void
    {
        Mail::fake();

        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com', 'source' => 'tema:fotos:ficha'])
            ->assertRedirect();

        $subscriber = NewsletterSubscriber::firstWhere('email', 'ana@example.com');
        $this->assertSame('tema:fotos:ficha', $subscriber->source);

        Mail::assertSent(NewsletterConfirmationMail::class, fn (NewsletterConfirmationMail $mail) => str_contains($mail->envelope()->subject, 'editar fotos')
            && str_contains($mail->render(), 'los 25 prompts más usados para editar fotos'));
    }

    public function test_un_tema_que_no_existe_no_es_un_pack(): void
    {
        Mail::fake();

        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com', 'source' => 'tema:no-existe']);

        Mail::assertSent(NewsletterConfirmationMail::class, fn (NewsletterConfirmationMail $mail) => str_contains($mail->render(), 'Confirmar suscripción'));
    }

    public function test_al_confirmar_enlaza_el_pack_de_fotos(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com', 'source' => 'tema:fotos:guia']);

        $this->post(URL::temporarySignedRoute('newsletter.confirm.store', now()->addDay(), ['subscriber' => $subscriber->id]))
            ->assertOk()
            ->assertSee('Abrir el pack')
            ->assertSee('/packs/fotos', false);
    }

    public function test_quien_ya_esta_suscrito_recibe_el_pack_por_email(): void
    {
        Mail::fake();
        NewsletterSubscriber::create(['email' => 'ana@example.com', 'source' => 'footer'])
            ->forceFill(['confirmed_at' => now()])->save();

        $this->post(route('newsletter.subscribe'), $this->formGuard() + ['email' => 'ana@example.com', 'source' => 'tema:fotos:ficha']);

        Mail::assertSent(ProfessionPackMail::class, fn (ProfessionPackMail $mail) => str_contains($mail->envelope()->subject, 'editar fotos')
            && str_contains($mail->render(), '/packs/fotos'));
    }

    public function test_la_pagina_del_pack_pide_firma_y_ordena_por_visitas(): void
    {
        $slugs = ThemePack::slugs(ThemePack::find('fotos'));
        Skill::factory()->create(['slug' => $slugs[0], 'title' => 'Menos vista', 'views_count' => 5]);
        Skill::factory()->create(['slug' => $slugs[1], 'title' => 'Más vista', 'views_count' => 50]);
        Skill::factory()->create(['title' => 'Fuera del pack', 'views_count' => 999]);

        $this->get('/packs/fotos')->assertForbidden();

        $this->get(URL::temporarySignedRoute('packs.theme', now()->addDay(), ['tema' => 'fotos']))
            ->assertOk()
            ->assertSeeInOrder(['Más vista', 'Menos vista'])
            ->assertDontSee('Fuera del pack')
            ->assertSee('noindex', false);

        $this->get(URL::temporarySignedRoute('packs.theme', now()->addDay(), ['tema' => 'no-existe']))->assertNotFound();
    }

    public function test_la_ficha_de_fotos_ofrece_el_pack_de_fotos_y_las_demas_el_de_su_profesion(): void
    {
        $profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);
        $foto = $this->photoSkill(['profession_id' => $profession->id]);
        $otra = Skill::factory()->create(['profession_id' => $profession->id]);

        $this->get(route('skills.show', $foto))->assertInertia(fn ($page) => $page
            ->where('packOffer.source', 'tema:fotos:ficha')
            ->where('packOffer.headline', 'Llévate gratis los 25 prompts más usados para editar fotos con ChatGPT y Gemini'));

        $this->get(route('skills.show', $otra))->assertInertia(fn ($page) => $page
            ->where('packOffer.source', 'pack:legal:ficha'));
    }

    public function test_las_guias_de_fotos_ofrecen_el_pack_en_el_formulario(): void
    {
        $this->get(route('guides.show', ['slug' => 'quitar-el-fondo-de-una-foto-con-ia']))
            ->assertOk()
            ->assertSee('Llévate gratis los 25 prompts más usados para editar fotos')
            ->assertSee('value="tema:fotos:guia"', false);

        $this->get(route('guides.show', ['slug' => 'que-son-los-skills-de-claude-code']))
            ->assertOk()
            ->assertSee('Recibe las mejores skills cada lunes')
            ->assertDontSee('tema:fotos', false);
    }

    public function test_todas_las_guias_del_tema_existen(): void
    {
        foreach (ThemePack::THEMES as $theme) {
            foreach ([$theme['guide'], ...$theme['guides']] as $slug) {
                $this->get(route('guides.show', ['slug' => $slug]))->assertOk();
            }
        }
    }
}
