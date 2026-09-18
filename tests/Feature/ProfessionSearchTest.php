<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Buscador dentro de una profesión: /profesiones/{slug}?q=...
 *
 * Nota sobre el motor: la búsqueda real usa la columna generada `search_vector`
 * de PostgreSQL. Los tests corren en SQLite, donde SkillSearch se degrada a un
 * LIKE sobre título y descripción. Lo que se verifica aquí es el acotado a la
 * profesión, el contrato de la respuesta y el SEO — no el ranking de relevancia,
 * que solo existe en Postgres.
 */
class ProfessionSearchTest extends TestCase
{
    use RefreshDatabase;

    private Profession $desarrollo;
    private Profession $marketing;

    protected function setUp(): void
    {
        parent::setUp();

        $this->desarrollo = Profession::factory()->create(['slug' => 'desarrollo', 'name' => 'Desarrollo']);
        $this->marketing = Profession::factory()->create(['slug' => 'marketing', 'name' => 'Marketing']);
    }

    private function skill(Profession $profession, string $title): Skill
    {
        return Skill::factory()->create([
            'profession_id' => $profession->id,
            'title' => $title,
            'status' => 'published',
        ]);
    }

    public function test_the_page_exposes_the_search_filter(): void
    {
        $this->get(route('professions.show', $this->desarrollo))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Professions/Show')
                ->where('filters.q', ''));
    }

    public function test_it_filters_the_skills_of_the_profession(): void
    {
        $match = $this->skill($this->desarrollo, 'Revisar pull requests con IA');
        $other = $this->skill($this->desarrollo, 'Escribir tests unitarios');

        $this->get(route('professions.show', [$this->desarrollo, 'q' => 'pull requests']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('filters.q', 'pull requests')
                ->has('skills.data', 1)
                ->where('skills.data.0.id', $match->id));

        $this->assertDatabaseHas('skills', ['id' => $other->id]);
    }

    public function test_it_never_leaks_skills_from_another_profession(): void
    {
        $this->skill($this->marketing, 'Revisar pull requests con IA');

        // El término coincide, pero la skill es de otra profesión.
        $this->get(route('professions.show', [$this->desarrollo, 'q' => 'pull requests']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->has('skills.data', 0));
    }

    public function test_an_empty_query_shows_everything(): void
    {
        $this->skill($this->desarrollo, 'Revisar pull requests con IA');
        $this->skill($this->desarrollo, 'Escribir tests unitarios');

        $this->get(route('professions.show', [$this->desarrollo, 'q' => '   ']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('filters.q', '')
                ->has('skills.data', 2));
    }

    public function test_pagination_keeps_the_search_term(): void
    {
        foreach (range(1, 25) as $i) {
            $this->skill($this->desarrollo, "Revisar pull requests numero {$i}");
        }

        $this->get(route('professions.show', [$this->desarrollo, 'q' => 'pull requests']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->has('skills.data', 20)
                ->where('skills.total', 25)
                // Sin withQueryString() el enlace a la página 2 perdería el
                // término y devolvería el listado completo.
                ->where('skills.next_page_url', fn (?string $url) => str_contains((string) $url, 'q=')));
    }

    public function test_search_results_are_not_indexable(): void
    {
        $this->skill($this->desarrollo, 'Revisar pull requests con IA');

        $html = $this->get(route('professions.show', [$this->desarrollo, 'q' => 'pull']))
            ->assertOk()
            ->getContent();

        $this->assertStringContainsString('noindex, follow', $html);

        // La canónica apunta al listado limpio: una búsqueda es una vista
        // filtrada de esta página, no una URL con entidad propia.
        $this->assertStringContainsString(
            '<link rel="canonical" href="'.route('professions.show', $this->desarrollo).'"',
            $html
        );
    }

    public function test_the_unfiltered_listing_stays_indexable(): void
    {
        $this->skill($this->desarrollo, 'Revisar pull requests con IA');

        $html = $this->get(route('professions.show', $this->desarrollo))->assertOk()->getContent();

        $this->assertStringNotContainsString('noindex', $html);
        // El FAQPage solo se emite en la vista canónica.
        $this->assertStringContainsString('FAQPage', $html);
    }

    public function test_the_faq_schema_is_dropped_on_search_results(): void
    {
        $this->skill($this->desarrollo, 'Revisar pull requests con IA');

        $html = $this->get(route('professions.show', [$this->desarrollo, 'q' => 'pull']))
            ->assertOk()
            ->getContent();

        $this->assertStringNotContainsString('FAQPage', $html);
    }
}
