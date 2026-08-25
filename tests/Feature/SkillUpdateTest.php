<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SkillUpdateTest extends TestCase
{
    use RefreshDatabase;

    private User $author;
    private Profession $profession;
    private Skill $skill;

    protected function setUp(): void
    {
        parent::setUp();

        $this->author = User::factory()->create();
        $this->profession = Profession::factory()->create();

        $this->skill = Skill::factory()->create([
            'user_id'        => $this->author->id,
            'profession_id'  => $this->profession->id,
            'title'          => 'Título original',
            'slug'           => 'titulo-original',
            'prompt_content' => 'Prompt original',
            'status'         => 'published',
            'version'        => 1,
        ]);

        SkillVersion::create([
            'skill_id'       => $this->skill->id,
            'user_id'        => $this->author->id,
            'version'        => 1,
            'prompt_content' => 'Prompt original',
            'changelog'      => 'Versión inicial',
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(array $overrides = []): array
    {
        return array_merge([
            'profession_id'  => $this->profession->id,
            'title'          => 'Título original',
            'description'    => 'Una descripción suficientemente larga.',
            'prompt_content' => 'Prompt original',
            'tool_name'      => 'Claude',
            'difficulty'     => 'beginner',
        ], $overrides);
    }

    public function test_author_can_open_the_edit_form(): void
    {
        $this->actingAs($this->author)
            ->get(route('skills.edit', $this->skill))
            ->assertOk();
    }

    public function test_guests_are_redirected_to_login(): void
    {
        $this->get(route('skills.edit', $this->skill))->assertRedirect(route('login'));

        $this->patch(route('skills.update', $this->skill), $this->payload())
            ->assertRedirect(route('login'));
    }

    public function test_another_user_cannot_edit_the_skill(): void
    {
        $stranger = User::factory()->create();

        $this->actingAs($stranger)
            ->get(route('skills.edit', $this->skill))
            ->assertForbidden();

        $this->actingAs($stranger)
            ->patch(route('skills.update', $this->skill), $this->payload(['title' => 'Secuestrada']))
            ->assertForbidden();

        $this->assertSame('Título original', $this->skill->fresh()->title);
    }

    public function test_admin_can_edit_any_skill(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)
            ->patch(route('skills.update', $this->skill), $this->payload(['title' => 'Corregido por admin']))
            ->assertRedirect(route('skills.show', $this->skill));

        $this->assertSame('Corregido por admin', $this->skill->fresh()->title);
    }

    public function test_editing_the_prompt_creates_a_new_version(): void
    {
        $this->actingAs($this->author)
            ->patch(route('skills.update', $this->skill), $this->payload([
                'prompt_content' => 'Prompt mejorado',
                'changelog'      => 'Añadido paso de validación',
            ]))
            ->assertRedirect(route('skills.show', $this->skill));

        $skill = $this->skill->fresh();

        $this->assertSame('Prompt mejorado', $skill->prompt_content);
        $this->assertSame(2, $skill->version);
        $this->assertDatabaseHas('skill_versions', [
            'skill_id'       => $skill->id,
            'version'        => 2,
            'prompt_content' => 'Prompt mejorado',
            'changelog'      => 'Añadido paso de validación',
            'user_id'        => $this->author->id,
        ]);
        // La versión anterior se conserva intacta.
        $this->assertDatabaseHas('skill_versions', [
            'skill_id'       => $skill->id,
            'version'        => 1,
            'prompt_content' => 'Prompt original',
        ]);
    }

    public function test_editing_only_metadata_does_not_create_a_version(): void
    {
        $this->actingAs($this->author)
            ->patch(route('skills.update', $this->skill), $this->payload([
                'title'      => 'Título retocado',
                'difficulty' => 'advanced',
            ]));

        $skill = $this->skill->fresh();

        $this->assertSame('Título retocado', $skill->title);
        $this->assertSame('advanced', $skill->difficulty);
        $this->assertSame(1, $skill->version);
        $this->assertSame(1, SkillVersion::where('skill_id', $skill->id)->count());
    }

    public function test_slug_does_not_change_when_the_title_changes(): void
    {
        $this->actingAs($this->author)
            ->patch(route('skills.update', $this->skill), $this->payload(['title' => 'Un título completamente distinto']));

        $this->assertSame('titulo-original', $this->skill->fresh()->slug);
    }

    public function test_validation_errors_leave_the_skill_untouched(): void
    {
        $this->actingAs($this->author)
            ->patch(route('skills.update', $this->skill), $this->payload([
                'title'          => '',
                'prompt_content' => 'Esto no debería guardarse',
            ]))
            ->assertSessionHasErrors('title');

        $skill = $this->skill->fresh();

        $this->assertSame('Título original', $skill->title);
        $this->assertSame('Prompt original', $skill->prompt_content);
        $this->assertSame(1, $skill->version);
    }

    public function test_version_history_is_shown_on_the_skill_page(): void
    {
        $this->actingAs($this->author)
            ->patch(route('skills.update', $this->skill), $this->payload([
                'prompt_content' => 'Prompt mejorado',
                'changelog'      => 'Añadido paso de validación',
            ]));

        $this->get(route('skills.show', $this->skill))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Skills/Show')
                ->has('versions', 2)
                ->where('versions.0.version', 2)
                ->where('versions.0.changelog', 'Añadido paso de validación'));
    }

    public function test_guests_do_not_see_the_edit_affordance(): void
    {
        $this->get(route('skills.show', $this->skill))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->where('canEdit', false));
    }

    public function test_author_sees_the_edit_affordance_on_their_skill(): void
    {
        $this->actingAs($this->author)
            ->get(route('skills.show', $this->skill))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->where('canEdit', true));
    }
}
