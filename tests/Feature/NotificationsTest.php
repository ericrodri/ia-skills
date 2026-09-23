<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Notifications\CommentReplied;
use App\Notifications\NewCommentOnSkill;
use App\Notifications\SkillApproved;
use App\Notifications\SkillRejected;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class NotificationsTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    private User $author;

    private Skill $skill;

    protected function setUp(): void
    {
        parent::setUp();

        Notification::fake();

        $this->admin = User::factory()->create(['is_admin' => true]);
        $this->author = User::factory()->create();
        $this->skill = Skill::factory()->create([
            'user_id' => $this->author->id,
            'profession_id' => Profession::factory(),
            'status' => 'draft',
        ]);
    }

    public function test_approving_a_skill_notifies_its_author(): void
    {
        $this->actingAs($this->admin)->post(route('admin.skills.approve', $this->skill))->assertRedirect();

        Notification::assertSentTo($this->author, SkillApproved::class);
    }

    public function test_approving_an_already_published_skill_does_not_notify_again(): void
    {
        $this->skill->update(['status' => 'published']);

        $this->actingAs($this->admin)->post(route('admin.skills.approve', $this->skill));

        Notification::assertNothingSent();
    }

    public function test_rejecting_a_skill_sends_the_reason(): void
    {
        $this->actingAs($this->admin)
            ->post(route('admin.skills.reject', $this->skill), ['reason' => 'Falta el formato de salida'])
            ->assertRedirect();

        Notification::assertSentTo($this->author, SkillRejected::class, fn ($n) => $n->reason === 'Falta el formato de salida');
    }

    public function test_the_author_can_opt_out_of_emails(): void
    {
        $this->author->update(['notify_by_email' => false]);

        $this->actingAs($this->admin)->post(route('admin.skills.approve', $this->skill));

        Notification::assertNothingSent();
    }

    public function test_a_comment_notifies_the_skill_author_but_not_the_commenter(): void
    {
        $this->skill->update(['status' => 'published']);
        $commenter = User::factory()->create();

        $this->actingAs($commenter)
            ->post(route('comments.store', $this->skill->slug), ['content' => 'Me ha servido'])
            ->assertRedirect();

        Notification::assertSentTo($this->author, NewCommentOnSkill::class);
        Notification::assertNotSentTo($commenter, NewCommentOnSkill::class);
    }

    public function test_the_author_commenting_their_own_skill_gets_no_email(): void
    {
        $this->skill->update(['status' => 'published']);

        $this->actingAs($this->author)->post(route('comments.store', $this->skill->slug), ['content' => 'Nota del autor']);

        Notification::assertNothingSent();
    }

    public function test_a_reply_notifies_the_parent_author_and_the_skill_author_once(): void
    {
        $this->skill->update(['status' => 'published']);
        $first = User::factory()->create();
        $replier = User::factory()->create();

        $parent = Comment::create(['user_id' => $first->id, 'skill_id' => $this->skill->id, 'content' => 'Pregunta']);

        $this->actingAs($replier)->post(route('comments.store', $this->skill->slug), [
            'content' => 'Respuesta',
            'parent_id' => $parent->id,
        ]);

        Notification::assertSentTo($first, CommentReplied::class);
        Notification::assertSentToTimes($this->author, NewCommentOnSkill::class, 1);
    }

    public function test_when_the_skill_author_is_answered_they_only_get_the_reply_email(): void
    {
        $this->skill->update(['status' => 'published']);
        $parent = Comment::create(['user_id' => $this->author->id, 'skill_id' => $this->skill->id, 'content' => 'Aclaración']);

        $this->actingAs(User::factory()->create())->post(route('comments.store', $this->skill->slug), [
            'content' => 'Gracias',
            'parent_id' => $parent->id,
        ]);

        Notification::assertSentTo($this->author, CommentReplied::class);
        Notification::assertNotSentTo($this->author, NewCommentOnSkill::class);
    }

    public function test_a_reply_cannot_hang_from_a_comment_of_another_skill(): void
    {
        $this->skill->update(['status' => 'published']);
        $other = Skill::factory()->create();
        $foreign = Comment::create(['user_id' => $this->author->id, 'skill_id' => $other->id, 'content' => 'Otro hilo']);

        $this->actingAs(User::factory()->create())
            ->post(route('comments.store', $this->skill->slug), ['content' => 'x', 'parent_id' => $foreign->id])
            ->assertSessionHasErrors('parent_id');
    }

    public function test_a_mail_failure_does_not_break_the_action(): void
    {
        // Sin el fake y con un SMTP inalcanzable: el envío lanza de verdad.
        Notification::swap(new ChannelManager($this->app));
        config([
            'mail.default' => 'roto',
            'mail.mailers.roto' => ['transport' => 'smtp', 'host' => '127.0.0.1', 'port' => 1, 'timeout' => 1],
        ]);

        $this->actingAs($this->admin)
            ->post(route('admin.skills.approve', $this->skill))
            ->assertRedirect()
            ->assertSessionHas('success');

        $this->assertSame('published', $this->skill->fresh()->status);
    }
}
