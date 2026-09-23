<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Perfil público de autor, ranking y panel del usuario.
 */
class CommunityPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_get_a_unique_username_from_their_name(): void
    {
        $a = User::factory()->create(['name' => 'Laura Gómez']);
        $b = User::factory()->create(['name' => 'Laura Gómez']);

        $this->assertSame('laura-gomez', $a->username);
        $this->assertSame('laura-gomez-2', $b->username);
    }

    public function test_reserved_usernames_are_never_generated(): void
    {
        $this->assertSame('admin-1', User::factory()->create(['name' => 'Admin'])->username);
    }

    public function test_author_profile_lists_only_published_skills(): void
    {
        $author = User::factory()->create(['name' => 'Ana', 'bio' => 'PM en una fintech']);
        Skill::factory()->create(['user_id' => $author->id, 'title' => 'Publicada', 'vote_score' => 7, 'saves_count' => 3]);
        Skill::factory()->create(['user_id' => $author->id, 'title' => 'Borrador', 'status' => 'draft']);

        $this->get(route('authors.show', ['user' => $author->username]))
            ->assertOk()
            ->assertSee('"@type":"ProfilePage"', false)
            ->assertDontSee('noindex', false)
            ->assertInertia(fn ($page) => $page
                ->component('Authors/Show')
                ->where('stats', ['skills' => 1, 'votes' => 7, 'saves' => 3])
                ->has('skills.data', 1)
                ->where('skills.data.0.title', 'Publicada'));
    }

    public function test_an_author_without_published_skills_is_noindex(): void
    {
        $author = User::factory()->create();

        $this->get(route('authors.show', ['user' => $author->username]))
            ->assertOk()
            ->assertSee('name="robots" content="noindex, follow"', false);
    }

    public function test_unknown_author_is_404(): void
    {
        $this->get('/autores/no-existe')->assertNotFound();
    }

    public function test_profile_update_validates_the_username(): void
    {
        $user = User::factory()->create();
        User::factory()->create(['username' => 'ocupado']);

        $this->actingAs($user)
            ->patch(route('profile.update'), ['name' => $user->name, 'email' => $user->email, 'username' => 'Con Espacios'])
            ->assertSessionHasErrors('username');

        $this->actingAs($user)
            ->patch(route('profile.update'), ['name' => $user->name, 'email' => $user->email, 'username' => 'ocupado'])
            ->assertSessionHasErrors('username');

        $this->actingAs($user)
            ->patch(route('profile.update'), ['name' => $user->name, 'email' => $user->email, 'username' => 'admin'])
            ->assertSessionHasErrors('username');

        $this->actingAs($user)
            ->patch(route('profile.update'), [
                'name' => $user->name,
                'email' => $user->email,
                'username' => 'nuevo-nombre',
                'bio' => 'Hola',
                'notify_by_email' => false,
                'newsletter_opt_in' => true,
            ])
            ->assertSessionHasNoErrors();

        $user->refresh();
        $this->assertSame('nuevo-nombre', $user->username);
        $this->assertFalse($user->notify_by_email);
        $this->assertTrue($user->newsletter_opt_in);
    }

    public function test_a_user_with_a_reserved_username_can_still_save_their_profile(): void
    {
        $team = User::factory()->create(['username' => 'ia-skills']);

        $this->actingAs($team)
            ->patch(route('profile.update'), ['name' => 'Equipo', 'email' => $team->email, 'username' => 'ia-skills'])
            ->assertSessionHasNoErrors();
    }

    public function test_ranking_uses_this_weeks_votes_for_trending(): void
    {
        $old = Skill::factory()->create(['title' => 'Clásica', 'vote_score' => 500]);
        $hot = Skill::factory()->create(['title' => 'Nueva y votada', 'vote_score' => 3]);

        foreach (User::factory()->count(3)->create() as $voter) {
            Vote::create(['user_id' => $voter->id, 'skill_id' => $hot->id, 'value' => 1]);
        }

        $this->get(route('rankings.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Rankings/Index')
                ->where('rankings.trending.0.title', 'Nueva y votada')
                ->where('rankings.trending.0.metric', 3)
                ->where('rankings.top.0.title', 'Clásica')
                ->has('rankings.authors'));
    }

    public function test_ranking_filtered_by_profession_is_noindex(): void
    {
        $profession = Profession::factory()->create();
        Skill::factory()->create(['profession_id' => $profession->id]);

        $this->get(route('rankings.index', ['profesion' => $profession->slug]))
            ->assertOk()
            ->assertSee('name="robots" content="noindex, follow"', false)
            ->assertInertia(fn ($page) => $page->where('selectedProfession', $profession->slug));
    }

    public function test_dashboard_shows_the_users_skills_and_received_comments(): void
    {
        $user = User::factory()->create();
        $published = Skill::factory()->create(['user_id' => $user->id, 'vote_score' => 4, 'views_count' => 10]);
        Skill::factory()->create(['user_id' => $user->id, 'status' => 'rejected', 'rejection_reason' => 'Muy corta']);
        Skill::factory()->create(['user_id' => $user->id, 'status' => 'draft']);

        Comment::create(['user_id' => User::factory()->create()->id, 'skill_id' => $published->id, 'content' => 'Genial']);
        Comment::create(['user_id' => $user->id, 'skill_id' => $published->id, 'content' => 'Mío, no cuenta']);

        $this->actingAs($user)->get(route('dashboard'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Dashboard')
                // Primero lo pendiente, luego lo rechazado.
                ->has('pending', 2)
                ->where('pending.0.status', 'draft')
                ->where('pending.1.status', 'rejected')
                ->where('pending.1.rejection_reason', 'Muy corta')
                ->has('published.data', 1)
                ->where('stats.published', 1)
                ->where('stats.pending', 1)
                ->where('stats.votes', 4)
                ->has('recentComments', 1)
                ->where('recentComments.0.content', 'Genial'));
    }

    public function test_dashboard_paginates_published_skills_but_counts_them_all(): void
    {
        // La cuenta del equipo tiene miles de skills: sin paginar, el panel
        // pesaba 41 MB.
        $user = User::factory()->create();
        Skill::factory()->count(25)->create(['user_id' => $user->id, 'vote_score' => 2]);

        $this->actingAs($user)->get(route('dashboard'))
            ->assertInertia(fn ($page) => $page
                ->has('published.data', 20)
                ->where('published.total', 25)
                ->where('stats.published', 25)
                ->where('stats.votes', 50));
    }
}
