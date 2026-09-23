<?php

namespace Tests\Feature;

use App\Mail\NewsletterConfirmationMail;
use App\Mail\WeeklyDigestMail;
use App\Models\NewsletterSubscriber;
use App\Models\Skill;
use App\Models\User;
use App\Support\WeeklyDigest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

/**
 * Alta en el resumen semanal sin cuenta, con doble opt-in.
 */
class NewsletterSubscriptionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Mail::fake();
    }

    public function test_guides_show_the_subscription_form(): void
    {
        $this->get(route('guides.index'))
            ->assertOk()
            ->assertSee('id="newsletter"', false)
            ->assertSee(route('newsletter.subscribe'), false);
    }

    public function test_subscribing_creates_a_pending_subscriber_and_sends_the_confirmation(): void
    {
        $this->from(route('guides.index'))
            ->post(route('newsletter.subscribe'), ['email' => 'Ana@Example.com ', 'source' => 'guias'])
            ->assertRedirect(route('guides.index').'#newsletter')
            ->assertSessionHas('newsletter_status');

        $subscriber = NewsletterSubscriber::sole();
        $this->assertSame('ana@example.com', $subscriber->email);
        $this->assertSame('guias', $subscriber->source);
        $this->assertNull($subscriber->confirmed_at);

        Mail::assertSent(NewsletterConfirmationMail::class, fn ($m) => $m->hasTo('ana@example.com'));
    }

    public function test_an_active_subscriber_gets_the_same_answer_and_no_new_email(): void
    {
        NewsletterSubscriber::create(['email' => 'ana@example.com'])->forceFill(['confirmed_at' => now()])->save();

        $this->post(route('newsletter.subscribe'), ['email' => 'ana@example.com'])
            ->assertSessionHas('newsletter_status', fn ($m) => str_contains($m, 'Te hemos enviado un email'));

        Mail::assertNothingSent();
    }

    public function test_bots_filling_the_honeypot_are_rejected(): void
    {
        $this->post(route('newsletter.subscribe'), ['email' => 'bot@example.com', 'website' => 'http://spam'])
            ->assertSessionHasErrors('website');

        $this->assertDatabaseCount('newsletter_subscribers', 0);
        Mail::assertNothingSent();
    }

    public function test_invalid_emails_are_rejected(): void
    {
        $this->post(route('newsletter.subscribe'), ['email' => 'no-es-un-email'])->assertSessionHasErrors('email');
    }

    public function test_subscription_is_rate_limited(): void
    {
        foreach (range(1, 3) as $i) {
            $this->post(route('newsletter.subscribe'), ['email' => "p{$i}@example.com"])->assertRedirect();
        }

        $this->post(route('newsletter.subscribe'), ['email' => 'p4@example.com'])->assertStatus(429);
    }

    public function test_opening_the_confirmation_link_does_not_confirm_by_itself(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com']);
        $url = URL::temporarySignedRoute('newsletter.confirm', now()->addDay(), ['subscriber' => $subscriber->id]);

        $this->get($url)->assertOk()->assertSee('Confirmar suscripción');
        $this->assertNull($subscriber->fresh()->confirmed_at);

        $this->post($url)->assertOk()->assertSee('¡Suscripción confirmada!');
        $this->assertNotNull($subscriber->fresh()->confirmed_at);
    }

    public function test_an_expired_confirmation_link_is_rejected(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com']);
        $url = URL::temporarySignedRoute('newsletter.confirm', now()->addDay(), ['subscriber' => $subscriber->id]);

        $this->travel(2)->days();

        $this->post($url)->assertForbidden();
        $this->assertNull($subscriber->fresh()->confirmed_at);
    }

    public function test_the_weekly_digest_reaches_confirmed_subscribers_once(): void
    {
        Skill::factory()->create();

        $user = User::factory()->create(['email' => 'user@example.com', 'newsletter_opt_in' => true]);
        $confirmed = NewsletterSubscriber::create(['email' => 'confirmado@example.com']);
        $confirmed->forceFill(['confirmed_at' => now()])->save();
        NewsletterSubscriber::create(['email' => 'pendiente@example.com']);
        NewsletterSubscriber::create(['email' => 'baja@example.com'])->forceFill(['confirmed_at' => now(), 'unsubscribed_at' => now()])->save();
        // Mismo email que un usuario suscrito: solo debe recibir uno.
        NewsletterSubscriber::create(['email' => 'user@example.com'])->forceFill(['confirmed_at' => now()])->save();

        $this->artisan('newsletter:weekly')->assertSuccessful();

        Mail::assertSent(WeeklyDigestMail::class, 2);
        Mail::assertSent(WeeklyDigestMail::class, fn ($m) => $m->hasTo('user@example.com') && $m->recipient->is($user));
        Mail::assertSent(WeeklyDigestMail::class, fn ($m) => $m->hasTo('confirmado@example.com'));
    }

    public function test_a_subscriber_can_unsubscribe_from_the_signed_link(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com']);
        $subscriber->forceFill(['confirmed_at' => now()])->save();

        $mail = new WeeklyDigestMail($subscriber, WeeklyDigest::build());
        $mail->assertDontSeeInHtml('Gestionar preferencias');

        $url = URL::signedRoute('newsletter.subscriber.unsubscribe', ['subscriber' => $subscriber->id]);

        $this->get($url)->assertOk()->assertSee('¿Darte de baja del resumen semanal?');
        // Baja con un clic desde el cliente de correo: POST sin token CSRF.
        $this->post($url)->assertOk()->assertSee('Te has dado de baja');

        $this->assertFalse($subscriber->fresh()->isActive());
    }

    public function test_resubscribing_after_unsubscribing_requires_confirming_again(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com']);
        $subscriber->forceFill(['confirmed_at' => now(), 'unsubscribed_at' => now()])->save();

        $this->post(route('newsletter.subscribe'), ['email' => 'ana@example.com']);

        $subscriber->refresh();
        $this->assertNull($subscriber->confirmed_at);
        $this->assertNull($subscriber->unsubscribed_at);
        Mail::assertSent(NewsletterConfirmationMail::class);
    }
}
