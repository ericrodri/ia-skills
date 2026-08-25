<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class RateLimitTest extends TestCase
{
    use RefreshDatabase;

    protected function tearDown(): void
    {
        RateLimiter::clear('votes');
        RateLimiter::clear('comments');
        RateLimiter::clear('skill-writes');
        RateLimiter::clear('api');

        parent::tearDown();
    }

    private function publishedSkill(): Skill
    {
        return Skill::factory()->create([
            'profession_id' => Profession::factory()->create()->id,
            'status' => 'published',
        ]);
    }

    public function test_comments_are_limited_to_ten_per_minute(): void
    {
        $user = User::factory()->create();
        $skill = $this->publishedSkill();

        for ($i = 0; $i < 10; $i++) {
            $this->actingAs($user)
                ->post(route('comments.store', $skill), ['content' => "Comentario {$i}"])
                ->assertRedirect();
        }

        $this->actingAs($user)
            ->post(route('comments.store', $skill), ['content' => 'Uno de más'])
            ->assertStatus(429);

        $this->assertSame(10, $skill->comments()->count());
    }

    public function test_the_limit_is_per_user_not_global(): void
    {
        $skill = $this->publishedSkill();
        $noisyUser = User::factory()->create();

        for ($i = 0; $i < 10; $i++) {
            $this->actingAs($noisyUser)
                ->post(route('comments.store', $skill), ['content' => "Comentario {$i}"]);
        }

        $this->actingAs($noisyUser)
            ->post(route('comments.store', $skill), ['content' => 'Uno de más'])
            ->assertStatus(429);

        // Otro usuario no debe verse arrastrado por el límite del primero.
        $this->actingAs(User::factory()->create())
            ->post(route('comments.store', $skill), ['content' => 'Yo acabo de llegar'])
            ->assertRedirect();
    }

    public function test_skill_creation_is_limited_to_twenty_per_hour(): void
    {
        $user = User::factory()->create();
        $profession = Profession::factory()->create();

        $payload = fn (int $i) => [
            'profession_id'  => $profession->id,
            'title'          => "Skill número {$i}",
            'description'    => 'Una descripción suficientemente larga.',
            'prompt_content' => 'Contenido del prompt.',
            'tool_name'      => 'Claude',
            'difficulty'     => 'beginner',
        ];

        for ($i = 0; $i < 20; $i++) {
            $this->actingAs($user)->post(route('skills.store'), $payload($i))->assertRedirect();
        }

        $this->actingAs($user)->post(route('skills.store'), $payload(21))->assertStatus(429);

        $this->assertSame(20, Skill::where('user_id', $user->id)->count());
    }

    public function test_votes_are_limited_to_sixty_per_minute(): void
    {
        $user = User::factory()->create();
        $skill = $this->publishedSkill();

        for ($i = 0; $i < 60; $i++) {
            $this->actingAs($user)
                ->postJson(route('skills.vote', $skill), ['value' => 1])
                ->assertOk();
        }

        $this->actingAs($user)
            ->postJson(route('skills.vote', $skill), ['value' => 1])
            ->assertStatus(429);
    }

    public function test_the_api_is_limited_to_sixty_requests_per_minute(): void
    {
        $token = User::factory()->create()->createApiToken();

        for ($i = 0; $i < 60; $i++) {
            $this->getJson('/api/v1/saved-skills?api_key='.$token)->assertOk();
        }

        $this->getJson('/api/v1/saved-skills?api_key='.$token)->assertStatus(429);
    }
}
