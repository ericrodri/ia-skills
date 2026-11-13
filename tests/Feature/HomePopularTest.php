<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Portada: «Lo más usado esta semana» (HomeController::popularSkills) y los
 * accesos a las páginas por herramienta.
 */
class HomePopularTest extends TestCase
{
    use RefreshDatabase;

    private function visits(string $path, int $visitors, ?string $day = null): void
    {
        for ($i = 0; $i < $visitors; $i++) {
            DB::table('page_views')->insert([
                'day' => $day ?? now()->toDateString(),
                'path' => $path,
                'visitor' => "v{$path}{$i}",
                'device' => 'desktop',
                'created_at' => now(),
            ]);
        }
    }

    public function test_muestra_las_fichas_con_mas_visitantes_de_la_semana_en_orden(): void
    {
        Cache::flush();
        $menos = Skill::factory()->create();
        $mas = Skill::factory()->create();
        $vieja = Skill::factory()->create();

        $this->visits('/skills/'.$menos->slug, 2);
        $this->visits('/skills/'.$mas->slug, 5);
        $this->visits('/skills/'.$mas->slug.'/skill.md', 9);
        $this->visits('/skills/'.$vieja->slug, 20, now()->subDays(10)->toDateString());

        $this->get('/')->assertOk()->assertInertia(fn ($page) => $page
            ->has('popularSkills', 2)
            ->where('popularSkills.0.slug', $mas->slug)
            ->where('popularSkills.1.slug', $menos->slug));
    }

    public function test_no_muestra_skills_privadas_ni_borradores(): void
    {
        Cache::flush();
        $privada = Skill::factory()->create(['status' => Skill::PRIVATE, 'user_id' => User::factory()->create()->id]);
        $borrador = Skill::factory()->create(['status' => 'draft']);
        $this->visits('/skills/'.$privada->slug, 5);
        $this->visits('/skills/'.$borrador->slug, 5);

        $this->get('/')->assertOk()->assertInertia(fn ($page) => $page->has('popularSkills', 0));
    }

    public function test_enlaza_las_paginas_por_herramienta(): void
    {
        Cache::flush();
        Skill::factory()->create(['tool_name' => 'Gemini']);

        $this->get('/')->assertOk()->assertInertia(fn ($page) => $page
            ->where('tools.0.url', route('tools.show', ['slug' => 'gemini'])));
    }
}
