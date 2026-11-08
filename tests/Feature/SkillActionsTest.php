<?php

namespace Tests\Feature;

use App\Models\PageView;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use App\Support\RelatedContent;
use App\Support\SkillActions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * Uso de las fichas (App\Support\SkillActions) y bloque «siguiente paso»
 * (RelatedContent::similar y guideForSkill).
 */
class SkillActionsTest extends TestCase
{
    use RefreshDatabase;

    private const BROWSER = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36';

    private function press(array $data, string $agent = self::BROWSER)
    {
        return $this->withHeaders(['User-Agent' => $agent])->post(route('analytics.action'), $data);
    }

    public function test_cuenta_los_botones_por_dia_ficha_y_accion_sin_csrf(): void
    {
        $skill = Skill::factory()->create();

        $this->press(['s' => $skill->slug, 'a' => 'copiar'])->assertNoContent();
        $this->press(['s' => $skill->slug, 'a' => 'copiar'])->assertNoContent();
        $this->press(['s' => $skill->slug, 'a' => 'abrir_chatgpt'])->assertNoContent();
        $this->press(['s' => $skill->slug, 'a' => 'rellenar'])->assertNoContent();

        $rows = DB::table('skill_actions')->orderBy('action')->get();
        $this->assertCount(3, $rows);
        $this->assertSame(['abrir_chatgpt' => 1, 'copiar' => 2, 'rellenar' => 1], $rows->pluck('hits', 'action')->map(fn ($v) => (int) $v)->all());
    }

    public function test_descarta_bots_admins_acciones_desconocidas_y_fichas_no_publicadas(): void
    {
        $skill = Skill::factory()->create();
        $draft = Skill::factory()->create(['status' => 'draft']);

        $this->press(['s' => $skill->slug, 'a' => 'copiar'], 'Mozilla/5.0 (compatible; bingbot/2.0)')->assertNoContent();
        $this->press(['s' => $skill->slug, 'a' => 'borrar'])->assertNoContent();
        $this->press(['s' => 'no-existe', 'a' => 'copiar'])->assertNoContent();
        $this->press(['s' => $draft->slug, 'a' => 'copiar'])->assertNoContent();
        $this->actingAs(User::factory()->create(['is_admin' => true]))->press(['s' => $skill->slug, 'a' => 'copiar']);

        $this->assertSame(0, DB::table('skill_actions')->count());
    }

    public function test_el_informe_compara_usos_con_visitantes_de_la_ficha(): void
    {
        $skill = Skill::factory()->create();
        $this->press(['s' => $skill->slug, 'a' => 'copiar']);
        $this->press(['s' => $skill->slug, 'a' => 'abrir_gemini']);
        PageView::create(['day' => now()->toDateString(), 'path' => '/skills/'.$skill->slug, 'visitor' => str_repeat('a', 16), 'device' => 'desktop']);
        PageView::create(['day' => now()->toDateString(), 'path' => '/skills/'.$skill->slug, 'visitor' => str_repeat('b', 16), 'device' => 'mobile']);

        $report = SkillActions::report(now()->subDays(6)->toDateString(), now()->toDateString());

        $this->assertSame(2, $report['total']);
        $this->assertSame(2, $report['skillVisitors']);
        $this->assertSame($skill->slug, $report['skills'][0]['slug']);
        $this->assertSame(2, $report['skills'][0]['hits']);
        $this->assertSame(2, $report['skills'][0]['visitors']);
        $this->assertSame('Copiar el prompt', collect($report['actions'])->firstWhere('label', 'Copiar el prompt')['label']);

        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->get(route('admin.analytics', ['dias' => 7]))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->where('report.skillActions.total', 2));
    }

    public function test_siguiente_paso_propone_fichas_de_la_misma_tarea(): void
    {
        $diseno = Profession::factory()->create(['slug' => 'diseno']);
        $otra = Profession::factory()->create();

        // La parecida va antes por id: las cuatro siguientes son las vecinas
        // del final de la página, que el bloque no repite.
        $parecida = Skill::factory()->for($diseno)->create(['title' => 'Prompt para restaurar fotos antiguas', 'vote_score' => 1]);
        $skill = Skill::factory()->for($diseno)->create(['title' => 'Prompt para quitar personas de una foto con ChatGPT']);
        foreach (['Diseñar un logo con ChatGPT', 'Paleta de colores para una marca', 'Tipografías para una web', 'Moodboard de un proyecto'] as $title) {
            Skill::factory()->for($diseno)->create(['title' => $title, 'vote_score' => 50]);
        }
        Skill::factory()->for($otra)->create(['title' => 'Prompt para mejorar una foto de producto']);

        $similar = RelatedContent::similar($skill);

        $this->assertSame([$parecida->slug], array_column($similar, 'slug'));
        $this->assertSame([], RelatedContent::similar($skill, 3, [$parecida->slug]));

        // Una guía de otra profesión necesita dos palabras en común
        // (auditoria-seo-tecnica es de marketing y desarrollo, no de ventas).
        $ventas = Skill::factory()->for(Profession::factory()->create(['slug' => 'ventas']))->create(['title' => 'Auditoría de un pitch comercial']);
        $this->assertNull(RelatedContent::guideForSkill($ventas));

        $this->get(route('skills.show', $skill->slug))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('nextStep.skills.0.slug', $parecida->slug)
                ->where('nextStep.guide.slug', 'borrar-personas-de-una-foto-con-ia'));
    }
}
