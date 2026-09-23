<?php

namespace Tests\Feature;

use App\Models\NewsletterSubscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PrivacyPolicyTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_page_shows_the_controller_from_config(): void
    {
        config([
            'legal.owner' => 'Eric Rodríguez',
            'legal.tax_id' => '12345678Z',
            'legal.address' => 'Calle Falsa 1, Madrid',
            'legal.email' => 'hola@ia-skills.com',
            'legal.hosting' => 'Hetzner Online GmbH (Alemania)',
        ]);

        $this->get(route('legal.privacy'))
            ->assertOk()
            ->assertSee('Política de privacidad')
            ->assertSee('Eric Rodríguez')
            ->assertSee('12345678Z')
            ->assertSee('Calle Falsa 1, Madrid')
            ->assertSee('mailto:hola@ia-skills.com', false)
            ->assertSee('Hetzner Online GmbH (Alemania)')
            ->assertSee('Brevo')
            ->assertSee(config('session.cookie'))
            ->assertSee('name="robots" content="noindex, follow"', false);
    }

    public function test_empty_optional_fields_are_left_out_instead_of_printed_blank(): void
    {
        config(['legal.owner' => null, 'legal.tax_id' => null, 'legal.address' => null]);

        $this->get(route('legal.privacy'))
            ->assertOk()
            ->assertDontSee('NIF:')
            ->assertDontSee('Domicilio:');
    }

    public function test_it_is_linked_from_the_footer_and_the_newsletter_form(): void
    {
        $this->get(route('guides.index'))
            ->assertSee(route('legal.privacy'), false)
            ->assertSee(route('legal.privacy').'#finalidades', false);

        $this->get(route('sitemap.pages'))->assertSee(route('legal.privacy'), false);
    }

    public function test_unconfirmed_and_unsubscribed_emails_are_pruned_after_30_days(): void
    {
        $old = now()->subDays(NewsletterSubscriber::RETENTION_DAYS + 1);

        $staleUnconfirmed = NewsletterSubscriber::create(['email' => 'viejo@example.com']);
        $staleUnconfirmed->forceFill(['created_at' => $old])->save();

        $oldUnsubscribed = NewsletterSubscriber::create(['email' => 'baja@example.com']);
        $oldUnsubscribed->forceFill(['confirmed_at' => $old, 'unsubscribed_at' => $old])->save();

        $recentUnconfirmed = NewsletterSubscriber::create(['email' => 'nuevo@example.com']);

        $active = NewsletterSubscriber::create(['email' => 'activo@example.com']);
        $active->forceFill(['created_at' => $old, 'confirmed_at' => $old])->save();

        $this->artisan('model:prune', ['--model' => [NewsletterSubscriber::class]])->assertSuccessful();

        $this->assertEqualsCanonicalizing(
            ['nuevo@example.com', 'activo@example.com'],
            NewsletterSubscriber::pluck('email')->all(),
        );
    }
}
