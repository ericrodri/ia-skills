<?php

namespace Tests\Feature;

use App\Mail\NewsletterConfirmationMail;
use App\Mail\ProfessionPackMail;
use App\Models\NewsletterSubscriber;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\ProfessionPack;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

/**
 * Pack descargable de las páginas de profesión a cambio del email.
 */
class ProfessionPackTest extends TestCase
{
    use RefreshDatabase;

    private Profession $profession;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);
    }

    public function test_requesting_a_pack_sends_the_confirmation_with_the_pack(): void
    {
        Mail::fake();

        $this->post(route('newsletter.subscribe'), ['email' => 'Ana@Example.com', 'source' => 'pack:legal'])
            ->assertRedirect();

        $subscriber = NewsletterSubscriber::firstWhere('email', 'ana@example.com');
        $this->assertSame('pack:legal', $subscriber->source);
        $this->assertNull($subscriber->confirmed_at);

        Mail::assertSent(NewsletterConfirmationMail::class, fn (NewsletterConfirmationMail $mail) => str_contains($mail->envelope()->subject, 'Legal')
            && str_contains($mail->render(), 'Confirmar y descargar el pack'));
        Mail::assertNotSent(ProfessionPackMail::class);
    }

    public function test_confirming_shows_the_pack_link(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com', 'source' => 'pack:legal']);

        $this->post(URL::temporarySignedRoute('newsletter.confirm.store', now()->addDay(), ['subscriber' => $subscriber->id]))
            ->assertOk()
            ->assertSee('Abrir el pack de Legal')
            ->assertSee('/profesiones/legal/pack', false);

        $this->assertTrue($subscriber->fresh()->isActive());
    }

    public function test_a_plain_subscription_shows_no_pack(): void
    {
        $subscriber = NewsletterSubscriber::create(['email' => 'ana@example.com', 'source' => 'footer']);

        $this->post(URL::temporarySignedRoute('newsletter.confirm.store', now()->addDay(), ['subscriber' => $subscriber->id]))
            ->assertOk()
            ->assertDontSee('Abrir el pack');
    }

    public function test_active_subscribers_get_the_pack_by_email_without_confirming_again(): void
    {
        Mail::fake();
        NewsletterSubscriber::create(['email' => 'ana@example.com', 'source' => 'footer'])
            ->forceFill(['confirmed_at' => now()])->save();
        User::factory()->create(['email' => 'luis@example.com', 'newsletter_opt_in' => true]);

        $this->post(route('newsletter.subscribe'), ['email' => 'ana@example.com', 'source' => 'pack:legal']);
        $this->post(route('newsletter.subscribe'), ['email' => 'luis@example.com', 'source' => 'pack:legal']);

        Mail::assertSent(ProfessionPackMail::class, 2);
        Mail::assertNotSent(NewsletterConfirmationMail::class);
        $this->assertSame('footer', NewsletterSubscriber::firstWhere('email', 'ana@example.com')->source);
    }

    public function test_the_pack_page_needs_a_valid_signature(): void
    {
        $this->get('/profesiones/legal/pack')->assertForbidden();
    }

    public function test_the_pack_lists_the_top_skills_with_their_prompts(): void
    {
        Skill::factory()->create(['profession_id' => $this->profession->id, 'title' => 'Revisar contratos', 'prompt_content' => 'PROMPT-REVISAR', 'vote_score' => 50, 'status' => 'published']);
        Skill::factory()->create(['profession_id' => $this->profession->id, 'title' => 'Borrador oculto', 'vote_score' => 99, 'status' => 'draft']);

        $this->get(ProfessionPack::url($this->profession))
            ->assertOk()
            ->assertSee('Revisar contratos')
            ->assertSee('PROMPT-REVISAR')
            ->assertDontSee('Borrador oculto')
            ->assertSee('noindex', false);
    }

    public function test_unknown_pack_sources_fall_back_to_a_normal_subscription(): void
    {
        Mail::fake();

        $this->post(route('newsletter.subscribe'), ['email' => 'ana@example.com', 'source' => 'pack:no-existe']);

        Mail::assertSent(NewsletterConfirmationMail::class, fn (NewsletterConfirmationMail $mail) => ! str_contains($mail->render(), 'pack'));
    }
}
