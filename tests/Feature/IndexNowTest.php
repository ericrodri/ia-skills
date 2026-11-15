<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Support\Guides;
use App\Support\IndexNow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class IndexNowTest extends TestCase
{
    use RefreshDatabase;

    private string $statePath;

    private Profession $profession;

    protected function setUp(): void
    {
        parent::setUp();

        $this->statePath = sys_get_temp_dir().'/indexnow-test-'.uniqid().'.json';
        config([
            'services.indexnow.enabled' => true,
            'services.indexnow.state' => $this->statePath,
            'app.url' => 'https://ia-skills.com',
        ]);
        $this->travelTo(now()->setTime(12, 0));

        $this->profession = Profession::factory()->create(['slug' => 'diseno', 'is_active' => true]);
    }

    protected function tearDown(): void
    {
        @unlink($this->statePath);

        parent::tearDown();
    }

    public function test_el_fichero_de_la_clave_esta_publicado(): void
    {
        $key = IndexNow::key();

        $this->assertMatchesRegularExpression('/^[a-f0-9]{32}$/', $key);
        $this->assertSame($key, trim((string) file_get_contents(public_path("{$key}.txt"))));
    }

    public function test_envia_las_fichas_y_guias_cambiadas_desde_el_ultimo_envio(): void
    {
        $nueva = $this->skill('ficha-nueva', now()->subMinutes(10));
        $vieja = $this->skill('ficha-vieja', now()->subDays(3));
        $this->skill('ficha-borrador', now()->subMinutes(5), 'draft');

        $guides = $this->guideDates();
        $changed = array_key_first($guides);
        $guides[$changed] = '2000-01-01';
        IndexNow::saveState(['last_run' => now()->subHour()->toIso8601String(), 'guides' => $guides]);

        Http::fake(['api.indexnow.org/*' => Http::response('', 200)]);

        $this->artisan('indexnow:submit')->assertSuccessful();

        Http::assertSent(function (Request $request) use ($nueva, $vieja, $changed) {
            $urls = $request['urlList'];

            return $request->url() === 'https://api.indexnow.org/indexnow'
                && $request['host'] === 'ia-skills.com'
                && $request['key'] === IndexNow::key()
                && $request['keyLocation'] === 'https://ia-skills.com/'.IndexNow::key().'.txt'
                && in_array(route('skills.show', ['skill' => $nueva->slug]), $urls, true)
                && ! in_array(route('skills.show', ['skill' => $vieja->slug]), $urls, true)
                && ! in_array(route('skills.show', ['skill' => 'ficha-borrador']), $urls, true)
                && in_array(route('guides.show', ['slug' => $changed]), $urls, true)
                && count($urls) === 2;
        });

        $state = IndexNow::state();
        $this->assertSame(now()->toIso8601String(), $state['last_run']);
        $this->assertSame($this->guideDates(), $state['guides']);
    }

    public function test_sin_cambios_no_envia_nada(): void
    {
        IndexNow::saveState(['last_run' => now()->subHour()->toIso8601String(), 'guides' => $this->guideDates()]);
        Http::fake();

        $this->artisan('indexnow:submit')->assertSuccessful();

        Http::assertNothingSent();
    }

    public function test_si_falla_no_guarda_el_estado_para_reintentarlo(): void
    {
        $this->skill('ficha-nueva', now()->subMinutes(10));
        $before = now()->subHour()->toIso8601String();
        IndexNow::saveState(['last_run' => $before, 'guides' => $this->guideDates()]);

        Http::fake(['api.indexnow.org/*' => Http::response('', 429)]);

        $this->artisan('indexnow:submit')->assertFailed();

        $this->assertSame($before, IndexNow::state()['last_run']);
    }

    public function test_desactivado_fuera_de_produccion_no_envia(): void
    {
        config(['services.indexnow.enabled' => false]);
        $this->skill('ficha-nueva', now()->subMinutes(10));
        Http::fake();

        $this->artisan('indexnow:submit')->assertSuccessful();

        Http::assertNothingSent();
        $this->assertFileDoesNotExist($this->statePath);
    }

    public function test_la_primera_vez_solo_mira_el_ultimo_dia(): void
    {
        $this->skill('ficha-de-hoy', now()->subHours(2));
        $this->skill('ficha-antigua', now()->subDays(5));

        $urls = IndexNow::changes(IndexNow::state(), now())['urls'];

        $this->assertContains(route('skills.show', ['skill' => 'ficha-de-hoy']), $urls);
        $this->assertNotContains(route('skills.show', ['skill' => 'ficha-antigua']), $urls);
    }

    private function skill(string $slug, $updatedAt, string $status = 'published'): Skill
    {
        $skill = Skill::factory()->create([
            'profession_id' => $this->profession->id,
            'slug' => $slug,
            'status' => $status,
        ]);
        DB::table('skills')->where('id', $skill->id)->update(['updated_at' => $updatedAt]);

        return $skill;
    }

    /**
     * @return array<string, string>
     */
    private function guideDates(): array
    {
        $dates = [];
        foreach (Guides::all() as $guide) {
            $dates[$guide['slug']] = max((string) ($guide['published'] ?? ''), (string) ($guide['updated'] ?? ''));
        }

        return $dates;
    }
}
