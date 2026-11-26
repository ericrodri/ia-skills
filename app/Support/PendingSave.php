<?php

namespace App\Support;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * «Guardar» sin cuenta: la ficha se apunta en la sesión, se pide crear la
 * cuenta (o entrar) y, al terminar, queda guardada y se vuelve a ella.
 *
 * Antes «Guardar» llevaba a iniciar sesión, pedía confirmar el email y luego
 * dejaba en /guardadas: en toda la vida de la web se habían guardado 23
 * fichas (26-11-2026).
 */
class PendingSave
{
    private const KEY = 'pending_save';

    /**
     * Apunta la ficha si existe y está publicada, y fija la vuelta a ella.
     * Devuelve sus datos para el formulario, o null.
     *
     * @return array{slug: string, title: string}|null
     */
    public static function remember(Request $request, ?string $slug): ?array
    {
        if ($slug === null || $slug === '' || strlen($slug) > 255) {
            return $request->session()->has(self::KEY) ? self::current($request) : null;
        }

        $skill = Skill::query()->where('slug', $slug)->where('status', 'published')->first(['id', 'slug', 'title']);

        if ($skill === null) {
            return null;
        }

        $request->session()->put(self::KEY, $skill->slug);
        $request->session()->put('url.intended', route('skills.show', $skill->slug, absolute: false));

        return ['slug' => $skill->slug, 'title' => $skill->title];
    }

    /** @return array{slug: string, title: string}|null */
    public static function current(Request $request): ?array
    {
        $slug = $request->session()->get(self::KEY);
        $title = $slug ? Skill::query()->where('slug', $slug)->where('status', 'published')->value('title') : null;

        return $title ? ['slug' => $slug, 'title' => $title] : null;
    }

    /**
     * Tras registrarse o entrar: guarda la ficha pendiente y lo cuenta en
     * skill_actions con `$action` (registro_guardar, entrar_guardar o
     * google_guardar).
     */
    public static function apply(Request $request, User $user, string $action): void
    {
        $slug = $request->session()->pull(self::KEY);

        if (! is_string($slug)) {
            return;
        }

        $skill = Skill::query()->where('slug', $slug)->where('status', 'published')->first();

        if ($skill === null) {
            return;
        }

        if (! $user->hasSaved($skill)) {
            $user->savedSkills()->attach($skill->id);
            $skill->bump('saves_count');
        }

        SkillActions::count($skill->id, $action, $user);
        $request->session()->flash('success', 'Ficha guardada. La tienes en «Guardadas».');
    }
}
