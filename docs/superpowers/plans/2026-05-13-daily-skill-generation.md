# Daily Skill Generation Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Create `php artisan skills:import {file}` command that reads a JSON file of generated skills and inserts them as published records into the ia-skills PostgreSQL database.

**Architecture:** Single Artisan command class auto-discovered by Laravel 11. Reads JSON array, maps profession slugs to IDs, generates unique slugs, inserts Skill + SkillVersion per item. Hard limit 20 items. No Kernel.php needed — Laravel 11 auto-discovers commands from `app/Console/Commands/`.

**Tech Stack:** Laravel 11, PHP 8.3, Eloquent ORM, PostgreSQL

---

## File Map

| File | Action | Responsibility |
|------|--------|---------------|
| `app/Console/Commands/SkillImportCommand.php` | Create | Full import logic: validate JSON, map professions, insert Skill + SkillVersion |
| `tests/Feature/SkillImportCommandTest.php` | Create | Feature tests for the command |

---

### Task 1: Create SkillImportCommand with validation

**Files:**
- Create: `app/Console/Commands/SkillImportCommand.php`
- Create: `tests/Feature/SkillImportCommandTest.php`

- [ ] **Step 1: Write the failing test**

Create `tests/Feature/SkillImportCommandTest.php`:

```php
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
```

- [ ] **Step 2: Run tests to verify they fail**

```bash
cd /home/eric/projects/ia-skills && php artisan test tests/Feature/SkillImportCommandTest.php
```
Expected: FAIL — `Command "skills:import" is not defined`

- [ ] **Step 3: Create the command**

Create `app/Console/Commands/SkillImportCommand.php`:

```php
<?php

namespace App\Console\Commands;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class SkillImportCommand extends Command
{
    protected $signature = 'skills:import {file : Path to JSON file with skills array}';
    protected $description = 'Import generated skills from a JSON file into the database';

    public function handle(): int
    {
        $path = $this->argument('file');

        if (! file_exists($path)) {
            $this->error("File not found: {$path}");
            return self::FAILURE;
        }

        $data = json_decode(file_get_contents($path), true);

        if (! is_array($data)) {
            $this->error('JSON must be an array of skill objects.');
            return self::FAILURE;
        }

        if (count($data) > 20) {
            $this->error('Máximo 20 skills por importación. El archivo contiene ' . count($data) . '.');
            return self::FAILURE;
        }

        $professions = Profession::where('is_active', true)
            ->pluck('id', 'slug');

        $inserted = 0;
        $skipped = 0;
        $insertedTitles = [];

        foreach ($data as $item) {
            $professionId = $professions[$item['profession_slug'] ?? ''] ?? null;

            if (! $professionId) {
                $this->line("  ⚠ Profesión no encontrada: {$item['profession_slug']} — omitida");
                $skipped++;
                continue;
            }

            if (Skill::whereRaw('LOWER(title) = ?', [strtolower($item['title'])])->exists()) {
                $this->line("  ⚠ Título duplicado: {$item['title']} — omitida");
                $skipped++;
                continue;
            }

            $slug = $this->uniqueSlug(Str::slug($item['title']));

            $skill = Skill::create([
                'profession_id'     => $professionId,
                'user_id'           => 1,
                'title'             => $item['title'],
                'slug'              => $slug,
                'description'       => $item['description'],
                'prompt_content'    => $item['prompt_content'],
                'tool_name'         => $item['tool_name'],
                'difficulty'        => $item['difficulty'],
                'estimated_minutes' => $item['estimated_minutes'] ?? null,
                'use_case'          => $item['use_case'] ?? null,
                'status'            => 'published',
                'resource_type'     => $item['resource_type'] ?? 'prompt',
                'vote_score'        => 0,
                'views_count'       => 0,
                'saves_count'       => 0,
                'version'           => 1,
            ]);

            SkillVersion::create([
                'skill_id'       => $skill->id,
                'user_id'        => 1,
                'version'        => 1,
                'prompt_content' => $skill->prompt_content,
                'changelog'      => 'Generado automáticamente',
            ]);

            $inserted++;
            $insertedTitles[] = "  ✓ [{$skill->slug}] {$skill->title}";
        }

        foreach ($insertedTitles as $line) {
            $this->line($line);
        }

        $this->info("Insertadas: {$inserted} | Omitidas: {$skipped}");

        return self::SUCCESS;
    }

    private function uniqueSlug(string $base): string
    {
        $slug = $base;
        $counter = 2;

        while (Skill::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $counter++;
        }

        return $slug;
    }
}
```

- [ ] **Step 4: Run tests to verify they pass**

```bash
php artisan test tests/Feature/SkillImportCommandTest.php
```
Expected: 5 tests PASS

- [ ] **Step 5: Verify command is discovered**

```bash
php artisan list | grep skills
```
Expected output includes: `skills:import`

- [ ] **Step 6: Commit**

```bash
git add app/Console/Commands/SkillImportCommand.php tests/Feature/SkillImportCommandTest.php
git commit -m "feat: add skills:import artisan command for daily skill generation"
git push
```

---

### Task 2: Manual smoke test end-to-end

**Files:**
- No code changes — manual verification only

- [ ] **Step 1: Create a test JSON file locally**

```bash
cat > /tmp/test_import.json << 'EOF'
[
  {
    "title": "Cómo usar Claude para escribir tests unitarios más rápido",
    "description": "Workflow para generar tests unitarios completos con Claude, incluyendo edge cases y mocks, en segundos.",
    "prompt_content": "# Generar Tests Unitarios con Claude\n\n## Cómo usar esta skill\n\nPega el código de la función que quieres testear y di: 'Genera tests unitarios completos para esta función, incluyendo casos límite y mocks necesarios.'\n\n## Ejemplo\n\n```\n[pega tu función aquí]\n\nGenera tests unitarios completos.\n```\n\n## Resultado esperado\n\nClaudeGenerará un archivo de tests con:\n- Tests para el happy path\n- Tests para casos de error\n- Mocks de dependencias externas",
    "tool_name": "Claude",
    "difficulty": "intermediate",
    "use_case": "Acelerar el ciclo TDD y mejorar cobertura de tests",
    "profession_slug": "desarrollador",
    "resource_type": "prompt"
  }
]
EOF
```

- [ ] **Step 2: Run the import locally**

```bash
cd /home/eric/projects/ia-skills && php artisan skills:import /tmp/test_import.json
```

Expected output:
```
  ✓ [como-usar-claude-para-escribir-tests-unitarios-mas-rapido] Cómo usar Claude para escribir tests unitarios más rápido
Insertadas: 1 | Omitidas: 0
```

- [ ] **Step 3: Verify in DB**

```bash
php artisan tinker --execute="echo \App\Models\Skill::latest()->first()->title;"
```
Expected: `Cómo usar Claude para escribir tests unitarios más rápido`

- [ ] **Step 4: Verify skill_versions record**

```bash
php artisan tinker --execute="
\$s = \App\Models\Skill::latest()->first();
echo \App\Models\SkillVersion::where('skill_id', \$s->id)->count();
"
```
Expected: `1`

- [ ] **Step 5: Verify visible on site**

```bash
curl -s https://ia-skills.com/skills/$(php artisan tinker --execute="echo \App\Models\Skill::latest()->first()->slug;") | grep -o '<title>[^<]*</title>'
```
Expected: title contains the skill name.

---

## Usage (daily workflow)

When the user asks "genera X skills":

1. Claude fetches from HN/Reddit/RSS via WebSearch/WebFetch
2. Claude generates JSON array (max 20 items) in the format above
3. Claude writes to `/tmp/ia_skills_YYYYMMDD.json`
4. Claude runs: `php artisan skills:import /tmp/ia_skills_YYYYMMDD.json`
5. Claude reports inserted titles and count
