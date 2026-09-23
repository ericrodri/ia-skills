<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Panel del usuario: sus skills (con el estado de moderación), lo que han
 * generado y los últimos comentarios que ha recibido.
 *
 * Antes era la plantilla de Breeze ("You're logged in!"), así que quien
 * compartía una skill no tenía dónde ver si se había aprobado ni qué opinaba
 * la gente de ella: no había motivo para volver.
 *
 * Ojo con el volumen: la cuenta del equipo tiene más de 6.000 skills. Cargarlas
 * todas generaba un HTML de 41 MB, así que las publicadas van paginadas y las
 * cifras salen de una consulta agregada. Las pendientes y rechazadas sí se
 * listan enteras: son pocas y son las que piden acción.
 */
class DashboardController extends Controller
{
    private const COLUMNS = ['id', 'profession_id', 'user_id', 'title', 'slug', 'status', 'rejection_reason', 'vote_score', 'views_count', 'saves_count', 'version', 'created_at'];

    public function __invoke(Request $request): Response
    {
        $user = $request->user();

        $pending = $user->skills()
            ->whereIn('status', ['draft', 'rejected'])
            ->with('profession:id,name,slug')
            ->orderByRaw("case status when 'draft' then 0 else 1 end")
            ->orderByDesc('created_at')
            ->get(self::COLUMNS);

        $published = $user->skills()
            ->published()
            ->with('profession:id,name,slug')
            ->withCount('comments')
            ->orderByDesc('created_at')
            ->paginate(20, self::COLUMNS)
            ->withQueryString();

        $totals = $user->skills()
            ->published()
            ->selectRaw('count(*) as skills, coalesce(sum(vote_score), 0) as votes, coalesce(sum(views_count), 0) as views, coalesce(sum(saves_count), 0) as saves')
            ->toBase()
            ->first();

        $recentComments = Comment::query()
            ->whereHas('skill', fn ($q) => $q->where('user_id', $user->id))
            ->where('user_id', '!=', $user->id)
            ->where('is_hidden', false)
            ->with(['user:id,name,username', 'skill:id,title,slug'])
            ->latest()
            ->limit(8)
            ->get(['id', 'user_id', 'skill_id', 'content', 'created_at']);

        return Inertia::render('Dashboard', [
            'pending' => $pending,
            'published' => $published,
            'stats' => [
                'published' => (int) $totals->skills,
                'pending' => $pending->where('status', 'draft')->count(),
                'votes' => (int) $totals->votes,
                'views' => (int) $totals->views,
                'saves' => (int) $totals->saves,
                'saved_by_me' => $user->savedSkills()->count(),
            ],
            'recentComments' => $recentComments,
            'preferences' => [
                'notify_by_email' => (bool) $user->notify_by_email,
                'newsletter_opt_in' => (bool) $user->newsletter_opt_in,
            ],
        ]);
    }
}
