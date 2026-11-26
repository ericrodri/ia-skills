<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Notifications\SkillApproved;
use App\Support\Notify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    public function index(Request $request): Response
    {
        // Las privadas no se moderan ni se listan: son solo de su autor.
        $status = in_array($request->get('status'), ['draft', 'published', 'rejected'], true)
            ? $request->get('status')
            : 'draft';

        $skills = Skill::where('status', $status)
            ->with([
                'profession:id,name,slug',
                'author:id,name,email',
            ])
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        $counts = [
            'draft'     => Skill::where('status', 'draft')->count(),
            'published' => Skill::where('status', 'published')->count(),
            'rejected'  => Skill::where('status', 'rejected')->count(),
        ];

        return Inertia::render('Admin/Skills/Index', [
            'skills'  => $skills,
            'counts'  => $counts,
            'filters' => ['status' => $status],
        ]);
    }

    public function approve(Skill $skill): RedirectResponse
    {
        // Aprobar una privada la publicaría sin que su autor lo pidiera.
        abort_if($skill->isPrivate(), 404);

        $wasUnpublished = $skill->status !== 'published';

        // forceFill: los campos de revisión no están en $fillable (los
        // formularios del autor no deben poder tocarlos) y update() los
        // descartaba en silencio, así que el motivo nunca se guardaba.
        $skill->forceFill([
            'status'           => 'published',
            'reviewed_by'      => auth()->id(),
            'reviewed_at'      => now(),
            'rejection_reason' => null,
        ])->save();

        if ($wasUnpublished) {
            $skill->profession->increment('skills_count');
            Notify::send($skill->author, new SkillApproved($skill));
        }

        return back()->with('success', "Skill aprobada y publicada.");
    }

    public function reject(Request $request, Skill $skill): RedirectResponse
    {
        abort_if($skill->isPrivate(), 404);

        $request->validate([
            'reason' => 'nullable|string|max:1000',
        ]);

        $wasPublished = $skill->status === 'published';

        $skill->forceFill([
            'status'           => 'rejected',
            'rejection_reason' => $request->reason,
            'reviewed_by'      => auth()->id(),
            'reviewed_at'      => now(),
        ])->save();

        if ($wasPublished) {
            $skill->profession->decrement('skills_count');
        }

        // Sin correo al autor (decisión de 2026-11-26): casi todo lo que se
        // rechaza no es un prompt aprovechable y el aviso no aportaba nada.
        // Si hay motivo, lo ve en su panel (Dashboard.vue).

        return back()->with('success', "Skill rechazada.");
    }
}
