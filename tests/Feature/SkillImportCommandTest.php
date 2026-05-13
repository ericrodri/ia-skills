<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SkillImportCommandTest extends TestCase
{
    use RefreshDatabase;

    private User $adminUser;
    private Profession $profession;

    protected function setUp(): void
    {
        parent::setUp();
        $this->adminUser = User::factory()->create(['id' => 1]);
        $this->profession = Profession::create([
            'name' => 'Desarrollador',
            'slug' => 'desarrollador',
            'icon' => '💻',
            'is_active' => true,
            'sort_order' => 1,
        ]);
    }

    private function writeJson(array $data, string $name = 'test.json'): string
    {
        $path = sys_get_temp_dir() . '/' . $name;
        file_put_contents($path, json_encode($data));
        return $path;
    }

    public function test_imports_valid_skills(): void
    {
        $file = $this->writeJson([[
            'title' => 'Test Skill',
            'description' => 'Descripción de prueba',
            'prompt_content' => '# Test\n\nContenido del prompt aquí.',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'use_case' => 'Testing',
            'profession_slug' => 'desarrollador',
            'resource_type' => 'prompt',
        ]]);

        $this->artisan('skills:import', ['file' => $file])
            ->expectsOutputToContain('Insertadas: 1')
            ->assertExitCode(0);

        $this->assertDatabaseHas('skills', [
            'title' => 'Test Skill',
            'status' => 'published',
            'user_id' => 1,
        ]);

        $skill = Skill::where('title', 'Test Skill')->first();
        $this->assertNotNull($skill);
        $this->assertDatabaseHas('skill_versions', [
            'skill_id' => $skill->id,
            'version' => 1,
        ]);
    }

    public function test_rejects_file_with_more_than_20_items(): void
    {
        $items = array_fill(0, 21, [
            'title' => 'Skill',
            'description' => 'Desc',
            'prompt_content' => 'Content',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'use_case' => 'Test',
            'profession_slug' => 'desarrollador',
            'resource_type' => 'prompt',
        ]);

        $file = $this->writeJson($items);

        $this->artisan('skills:import', ['file' => $file])
            ->expectsOutputToContain('Máximo 20')
            ->assertExitCode(1);

        $this->assertDatabaseCount('skills', 0);
    }

    public function test_skips_unknown_profession(): void
    {
        $file = $this->writeJson([[
            'title' => 'Unknown Prof Skill',
            'description' => 'Desc',
            'prompt_content' => 'Content',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'use_case' => 'Test',
            'profession_slug' => 'nonexistent',
            'resource_type' => 'prompt',
        ]]);

        $this->artisan('skills:import', ['file' => $file])
            ->expectsOutputToContain('Omitidas: 1')
            ->assertExitCode(0);

        $this->assertDatabaseCount('skills', 0);
    }

    public function test_deduplicates_slug_on_collision(): void
    {
        Skill::factory()->create([
            'slug' => 'test-skill',
            'user_id' => 1,
            'profession_id' => $this->profession->id,
        ]);

        $file = $this->writeJson([[
            'title' => 'Test Skill',
            'description' => 'Desc',
            'prompt_content' => 'Content',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'use_case' => 'Test',
            'profession_slug' => 'desarrollador',
            'resource_type' => 'prompt',
        ]]);

        $this->artisan('skills:import', ['file' => $file])
            ->assertExitCode(0);

        $this->assertDatabaseHas('skills', ['slug' => 'test-skill-2']);
    }

    public function test_skips_duplicate_title(): void
    {
        Skill::factory()->create([
            'title' => 'Test Skill',
            'slug' => 'test-skill',
            'user_id' => 1,
            'profession_id' => $this->profession->id,
        ]);

        $file = $this->writeJson([[
            'title' => 'Test Skill',
            'description' => 'Desc',
            'prompt_content' => 'Content',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'use_case' => 'Test',
            'profession_slug' => 'desarrollador',
            'resource_type' => 'prompt',
        ]]);

        $this->artisan('skills:import', ['file' => $file])
            ->expectsOutputToContain('Omitidas: 1')
            ->assertExitCode(0);

        $this->assertDatabaseCount('skills', 1);
    }
}
