<?php

namespace Tests\Feature;

use App\Mail\WeeklyDigestMail;
use App\Models\Skill;
use App\Models\User;
use App\Support\Guides;
use App\Support\WeeklyDigest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_only_mails_verified_subscribers(): void
    {
        Mail::fake();
        Skill::factory()->create(['title' => 'Nueva esta semana']);

        $subscriber = User::factory()->create(['newsletter_opt_in' => true]);
        User::factory()->create(['newsletter_opt_in' => false]);
        User::factory()->unverified()->create(['newsletter_opt_in' => true]);

        $this->artisan('newsletter:weekly')->assertSuccessful();

        Mail::assertSent(WeeklyDigestMail::class, 1);
        Mail::assertSent(WeeklyDigestMail::class, fn ($mail) => $mail->hasTo($subscriber->email)
            && $mail->digest['skills'][0]['title'] === 'Nueva esta semana');
    }

    public function test_dry_run_sends_nothing(): void
    {
        Mail::fake();
        Skill::factory()->create();
        User::factory()->create(['newsletter_opt_in' => true]);

        $this->artisan('newsletter:weekly --dry-run')
            ->expectsOutputToContain('se enviaría a 1 suscriptores')
            ->assertSuccessful();

        Mail::assertNothingSent();
    }

    public function test_a_week_without_news_sends_nothing(): void
    {
        Mail::fake();
        User::factory()->create(['newsletter_opt_in' => true]);
        Skill::factory()->create(['created_at' => now()->subMonth(), 'reviewed_at' => now()->subMonth()]);

        // Congelamos "hoy" lejos de cualquier fecha de guía para aislar el caso.
        $this->travelTo(now()->addYears(5));

        $this->artisan('newsletter:weekly')->expectsOutputToContain('No hay contenido nuevo')->assertSuccessful();

        Mail::assertNothingSent();
    }

    public function test_guides_are_capped_and_newest_first(): void
    {
        // La semana del lanzamiento tuvo decenas de guías: el email las listaba todas.
        $this->travelTo(Carbon::parse('2026-09-24 08:00'));
        $since = now()->subDays(7)->startOfDay();
        $recent = collect(Guides::all())
            ->filter(fn ($g) => Carbon::parse($g['updated'])->gte($since));

        $this->assertGreaterThan(WeeklyDigest::MAX_GUIDES, $recent->count(), 'El caso de prueba necesita más guías recientes que el límite.');

        $digest = WeeklyDigest::build();

        $this->assertCount(WeeklyDigest::MAX_GUIDES, $digest['guides']);
        $this->assertSame($recent->count() - WeeklyDigest::MAX_GUIDES, $digest['more_guides']);
        $this->assertSame(
            $recent->sortByDesc('updated')->first()['title'],
            $digest['guides'][0]['title'],
        );

        $mail = new WeeklyDigestMail(User::factory()->create(), $digest);
        $mail->assertSeeInHtml("Y {$digest['more_guides']} guías más esta semana");
    }

    public function test_the_email_renders_with_a_one_click_unsubscribe_header(): void
    {
        $user = User::factory()->create(['newsletter_opt_in' => true]);
        Skill::factory()->create(['title' => 'Prompt de prueba']);

        $mail = new WeeklyDigestMail($user, WeeklyDigest::build());

        $mail->assertSeeInHtml('Prompt de prueba');
        $mail->assertSeeInHtml('Darte de baja');
        $this->assertSame('List-Unsubscribe=One-Click', $mail->headers()->text['List-Unsubscribe-Post']);
    }

    public function test_get_on_the_unsubscribe_link_only_asks_for_confirmation(): void
    {
        $user = User::factory()->create(['newsletter_opt_in' => true]);
        $url = URL::signedRoute('newsletter.unsubscribe', ['user' => $user->id]);

        $this->get($url)->assertOk()->assertSee('¿Darte de baja del resumen semanal?');

        $this->assertTrue($user->fresh()->newsletter_opt_in);
    }

    public function test_post_on_the_signed_link_unsubscribes_without_csrf(): void
    {
        $user = User::factory()->create(['newsletter_opt_in' => true]);
        $url = URL::signedRoute('newsletter.unsubscribe', ['user' => $user->id]);

        $this->post($url)->assertOk()->assertSee('Te has dado de baja');

        $this->assertFalse($user->fresh()->newsletter_opt_in);
    }

    public function test_an_unsigned_link_is_rejected(): void
    {
        $user = User::factory()->create(['newsletter_opt_in' => true]);

        $this->post(route('newsletter.unsubscribe', ['user' => $user->id]))->assertForbidden();
        $this->assertTrue($user->fresh()->newsletter_opt_in);
    }

    public function test_registration_can_opt_in(): void
    {
        $this->post(route('register'), [
            'name' => 'Nueva',
            'email' => 'nueva@example.com',
            'password' => 'password-segura-123',
            'password_confirmation' => 'password-segura-123',
            'newsletter_opt_in' => true,
        ]);

        $this->assertTrue(User::where('email', 'nueva@example.com')->value('newsletter_opt_in'));
    }
}
