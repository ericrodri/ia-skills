<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Models\User;
use App\Support\SkillMerger;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Tests\TestCase;

/**
 * Skills privadas: solo las ve su autor. Si una se escapa a cualquier
 * listado, la empresa que guardó ahí su prompt interno deja de confiar.
 */
class PrivateSkillsTest extends TestCase
{
    use RefreshDatabase;

    private const TITLE = 'Protocolo interno del despacho Zarzamora';

    private User $owner;

    private Profession $profession;

    private Skill $skill;

    protected function setUp(): void
    {
        parent::setUp();

        Cache::flush();

        $this->owner = User::factory()->create(['username' => 'duena']);
        $this->profession = Profession::factory()->create(['slug' => 'legal', 'name' => 'Legal', 'is_active' => true]);

        // Una pública del mismo autor, para que su perfil y su profesión tengan contenido.
        Skill::factory()->create(['user_id' => $this->owner->id, 'profession_id' => $this->profession->id, 'status' => 'published']);

        $this->skill = new Skill([
            'user_id' => $this->owner->id,
            'profession_id' => $this->profession->id,
            'title' => self::TITLE,
            'slug' => 'protocolo-interno-del-despacho-zarzamora',
            'description' => 'Zarzamora: descripción privada',
            'prompt_content' => 'Prompt secreto Zarzamora con [cliente]',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
            'vote_score' => 999,
            'views_count' => 999,
        ]);
        $this->skill->makePrivate();
        $this->skill->save();
    }

    private function payload(array $overrides = []): array
    {
        return array_merge([
            'profession_id' => $this->profession->id,
            'title' => 'Mi prompt para contratos',
            'description' => 'Una descripción suficientemente larga.',
            'prompt_content' => 'Revisa este contrato',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
        ], $overrides);
    }

    public function test_no_aparece_en_ningun_listado_publico(): void
    {
        $pages = [
            route('home'),
            route('skills.index'),
            route('skills.index', ['q' => 'Zarzamora']),
            route('professions.show', 'legal'),
            route('authors.show', 'duena'),
            route('rankings.index'),
            route('feed'),
            route('llms'),
            route('sitemap.skills', ['page' => 1]),
            route('api.skills.index'),
            route('api.skills.index', ['q' => 'Zarzamora']),
        ];

        foreach ($pages as $url) {
            $response = $this->get($url);
            $this->assertLessThan(500, $response->getStatusCode(), $url);
            // Las búsquedas repiten la palabra buscada: ahí se mira lo que solo
            // está en la privada (su slug, su descripción y su prompt).
            if (! str_contains($url, 'q=')) {
                $this->assertStringNotContainsString('Zarzamora', $response->getContent(), "Se ve en {$url}");
            }
            $this->assertStringNotContainsString($this->skill->slug, $response->getContent(), "Se ve en {$url}");
            $this->assertStringNotContainsString('descripción privada', $response->getContent(), "Se ve en {$url}");
            $this->assertStringNotContainsString('Prompt secreto', $response->getContent(), "Se ve en {$url}");
        }

        $this->getJson(route('api.skills.show', $this->skill->slug))->assertNotFound();
    }

    public function test_la_ficha_solo_la_ve_su_autor_ni_siquiera_un_admin(): void
    {
        $this->get(route('skills.show', $this->skill->slug))->assertNotFound();
        $this->actingAs(User::factory()->create())->get(route('skills.show', $this->skill->slug))->assertNotFound();
        $this->actingAs(User::factory()->create(['is_admin' => true]))->get(route('skills.show', $this->skill->slug))->assertNotFound();

        $this->actingAs($this->owner)->get(route('skills.show', $this->skill->slug))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('skill.status', 'private')
                ->missing('skill.access_token')
                ->where('install.url', fn ($url) => str_contains($url, 'token='.$this->skill->access_token)));
    }

    public function test_el_skill_md_se_abre_con_su_enlace_secreto_y_no_cuenta_instalaciones(): void
    {
        $url = route('skills.markdown', $this->skill->slug);

        $this->get($url)->assertNotFound();
        $this->get($url.'?token=otro-token')->assertNotFound();
        $this->actingAs(User::factory()->create(['is_admin' => true]))->get($url)->assertNotFound();

        $this->app['auth']->forgetGuards();

        $this->get($url.'?token='.$this->skill->access_token)
            ->assertOk()
            ->assertSee('Prompt secreto Zarzamora')
            ->assertHeader('Cache-Control', 'no-store, private');

        $this->assertSame(0, (int) $this->skill->fresh()->installs_count);
    }

    public function test_nadie_puede_votar_guardar_ni_comentar_una_privada(): void
    {
        $other = User::factory()->create();

        $this->actingAs($other)->postJson(route('skills.vote', $this->skill->slug), ['value' => 1])->assertNotFound();
        $this->actingAs($other)->postJson(route('skills.save', $this->skill->slug))->assertNotFound();
        $this->actingAs($other)->post(route('comments.store', $this->skill->slug), ['content' => 'Hola'])->assertNotFound();

        $this->assertSame(0, DB::table('votes')->count());
        $this->assertSame(0, DB::table('saved_skills')->count());
        $this->assertSame(0, DB::table('comments')->count());
    }

    public function test_un_admin_no_puede_listarla_aprobarla_ni_editarla(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)->get(route('admin.skills.index', ['status' => 'private']))
            ->assertOk()
            ->assertDontSee('Zarzamora');
        $this->actingAs($admin)->post(route('admin.skills.approve', $this->skill))->assertNotFound();
        $this->actingAs($admin)->get(route('skills.edit', $this->skill->slug))->assertForbidden();

        $this->assertSame('private', $this->skill->fresh()->status);
    }

    public function test_crear_una_privada_no_pasa_por_moderacion_y_sale_en_el_panel(): void
    {
        $this->actingAs($this->owner)
            ->post(route('skills.store'), $this->payload(['visibility' => 'private']))
            ->assertRedirect();

        $skill = Skill::firstWhere('title', 'Mi prompt para contratos');
        $this->assertSame('private', $skill->status);
        $this->assertSame(40, strlen($skill->access_token));

        $this->actingAs($this->owner)->get(route('dashboard'))
            ->assertInertia(fn ($page) => $page
                ->has('private', 2)
                ->where('private', fn ($rows) => collect($rows)->pluck('title')->contains('Mi prompt para contratos')));
    }

    public function test_crear_sin_elegir_sigue_mandando_a_moderacion(): void
    {
        $this->actingAs($this->owner)->post(route('skills.store'), $this->payload());

        $skill = Skill::firstWhere('title', 'Mi prompt para contratos');
        $this->assertSame('draft', $skill->status);
        $this->assertNull($skill->access_token);
    }

    public function test_hacerla_publica_la_manda_a_moderacion(): void
    {
        $this->actingAs($this->owner)
            ->patch(route('skills.update', $this->skill->slug), $this->payload(['title' => self::TITLE, 'visibility' => 'public']))
            ->assertRedirect();

        $this->assertSame('draft', $this->skill->fresh()->status);
    }

    public function test_una_publicada_no_puede_volverse_privada(): void
    {
        $published = Skill::factory()->create(['user_id' => $this->owner->id, 'profession_id' => $this->profession->id, 'status' => 'published']);

        $this->actingAs($this->owner)
            ->patch(route('skills.update', $published->slug), $this->payload(['visibility' => 'private']))
            ->assertRedirect();

        $this->assertSame('published', $published->fresh()->status);
        $this->assertNull($published->fresh()->access_token);
    }

    public function test_un_borrador_si_puede_volverse_privado(): void
    {
        $draft = Skill::factory()->create(['user_id' => $this->owner->id, 'profession_id' => $this->profession->id, 'status' => 'draft']);

        $this->actingAs($this->owner)
            ->patch(route('skills.update', $draft->slug), $this->payload(['visibility' => 'private']));

        $this->assertSame('private', $draft->fresh()->status);
        $this->assertNotNull($draft->fresh()->access_token);
    }

    public function test_no_bloquea_que_el_catalogo_publique_el_mismo_titulo_ni_se_fusiona(): void
    {
        $file = storage_path('framework/testing-import-privadas.json');
        file_put_contents($file, json_encode([[
            'profession_slug' => 'legal',
            'title' => self::TITLE,
            'description' => 'Pública',
            'prompt_content' => 'Prompt público',
            'tool_name' => 'Claude',
            'difficulty' => 'beginner',
        ]]));

        try {
            $this->artisan('skills:import', ['file' => $file])->assertSuccessful();
        } finally {
            @unlink($file);
        }

        $this->assertSame(1, Skill::published()->where('title', self::TITLE)->count());
        $this->assertSame('private', $this->skill->fresh()->status);

        $this->expectException(InvalidArgumentException::class);
        SkillMerger::merge($this->skill, Skill::published()->where('title', self::TITLE)->first());
    }

    public function test_quien_tiene_el_enlace_ve_la_ficha_sin_cuenta(): void
    {
        $url = route('skills.show', $this->skill->slug);

        $this->get($url.'?token=otro-token')->assertNotFound();

        $this->get($url.'?token='.$this->skill->access_token)
            ->assertOk()
            ->assertSee('<meta name="referrer" content="no-referrer">', false)
            ->assertSee('noindex, nofollow', false)
            ->assertInertia(fn ($page) => $page
                ->where('skill.title', self::TITLE)
                ->missing('skill.access_token')
                ->where('share.viaLink', true)
                ->where('share.url', null)
                ->where('canEdit', false)
                ->where('install.url', fn ($u) => str_contains($u, 'token='.$this->skill->access_token)));

        // Con sesión de otra persona, el enlace también vale (pero no puede editarla).
        $this->actingAs(User::factory()->create())
            ->get($url.'?token='.$this->skill->access_token)
            ->assertOk()
            ->assertInertia(fn ($page) => $page->where('share.viaLink', true)->where('canEdit', false));

        // El historial de versiones se abre con el mismo enlace.
        SkillVersion::create([
            'skill_id' => $this->skill->id,
            'user_id' => $this->owner->id,
            'version' => 1,
            'prompt_content' => $this->skill->prompt_content,
            'changelog' => 'Versión inicial',
        ]);
        $this->app['auth']->forgetGuards();
        $versionUrl = route('skills.versions.show', ['skill' => $this->skill->slug, 'version' => 1]);
        $this->getJson($versionUrl)->assertNotFound();
        $this->getJson($versionUrl.'?token='.$this->skill->access_token)->assertOk()->assertJsonPath('version', 1);
    }

    public function test_el_autor_ve_el_enlace_y_puede_cambiarlo(): void
    {
        $old = $this->skill->access_token;

        $this->actingAs($this->owner)->get(route('skills.show', $this->skill->slug))
            ->assertInertia(fn ($page) => $page
                ->where('share.viaLink', false)
                ->where('share.url', route('skills.show', ['skill' => $this->skill->slug, 'token' => $old])));

        // Nadie más puede cambiarlo.
        $this->actingAs(User::factory()->create(['is_admin' => true]))
            ->post(route('skills.share.reset', $this->skill->slug))
            ->assertNotFound();
        $this->assertSame($old, $this->skill->fresh()->access_token);

        $this->actingAs($this->owner)
            ->post(route('skills.share.reset', $this->skill->slug))
            ->assertRedirect(route('skills.show', $this->skill->slug));

        $new = $this->skill->fresh()->access_token;
        $this->assertNotSame($old, $new);

        $this->app['auth']->forgetGuards();
        $this->get(route('skills.show', $this->skill->slug).'?token='.$old)->assertNotFound();
        $this->get(route('skills.markdown', $this->skill->slug).'?token='.$old)->assertNotFound();
        $this->get(route('skills.show', $this->skill->slug).'?token='.$new)->assertOk();
    }

    public function test_hacerla_publica_anula_los_enlaces_compartidos(): void
    {
        $old = $this->skill->access_token;

        $this->actingAs($this->owner)
            ->patch(route('skills.update', $this->skill->slug), $this->payload(['title' => self::TITLE, 'visibility' => 'public']))
            ->assertRedirect();

        $this->assertNull($this->skill->fresh()->access_token);

        // Si vuelve a ser privada, estrena enlace: el viejo no la reabre.
        $this->actingAs($this->owner)
            ->patch(route('skills.update', $this->skill->slug), $this->payload(['title' => self::TITLE, 'visibility' => 'private']))
            ->assertRedirect();

        $fresh = $this->skill->fresh();
        $this->assertSame('private', $fresh->status);
        $this->assertNotSame($old, $fresh->access_token);

        $this->app['auth']->forgetGuards();
        $this->get(route('skills.show', $this->skill->slug).'?token='.$old)->assertNotFound();
    }

    public function test_una_publicada_no_tiene_enlace_para_compartir(): void
    {
        $published = Skill::published()->first();

        $this->get(route('skills.show', $published->slug))
            ->assertOk()
            ->assertDontSee('name="referrer"', false)
            ->assertInertia(fn ($page) => $page->where('share', null));

        $this->actingAs($published->author)
            ->post(route('skills.share.reset', $published->slug))
            ->assertNotFound();
    }

    public function test_sin_herramienta_avisa_en_espanol_y_no_crea_nada(): void
    {
        $before = Skill::count();

        $this->actingAs($this->owner)
            ->from(route('skills.create'))
            ->post(route('skills.store'), $this->payload(['tool_name' => '', 'visibility' => 'private']))
            ->assertRedirect(route('skills.create'))
            ->assertSessionHasErrors(['tool_name' => 'El campo herramienta es obligatorio.']);

        $this->assertSame($before, Skill::count());
    }

    public function test_su_autor_puede_borrarla_y_nadie_mas(): void
    {
        SkillVersion::create(['skill_id' => $this->skill->id, 'user_id' => $this->owner->id, 'version' => 1, 'prompt_content' => 'x', 'changelog' => 'Versión inicial']);

        $this->actingAs($this->owner)->get(route('skills.show', $this->skill->slug))
            ->assertInertia(fn ($page) => $page->where('canDelete', true));

        // Ni otra persona ni un admin.
        $this->actingAs(User::factory()->create())->delete(route('skills.destroy', $this->skill->slug))->assertNotFound();
        $this->actingAs(User::factory()->create(['is_admin' => true]))->delete(route('skills.destroy', $this->skill->slug))->assertNotFound();
        $this->assertModelExists($this->skill);

        $this->actingAs($this->owner)
            ->delete(route('skills.destroy', $this->skill->slug))
            ->assertRedirect(route('dashboard'));

        $this->assertModelMissing($this->skill);
        $this->assertSame(0, SkillVersion::where('skill_id', $this->skill->id)->count());
    }

    public function test_una_publicada_no_se_puede_borrar(): void
    {
        $published = Skill::published()->first();

        $this->actingAs($this->owner)->get(route('skills.show', $published->slug))
            ->assertInertia(fn ($page) => $page->where('canDelete', false));

        $this->actingAs($this->owner)->delete(route('skills.destroy', $published->slug))->assertNotFound();
        $this->assertModelExists($published);
    }
}
