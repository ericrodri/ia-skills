<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    public function index(Request $request): Response
    {
        $status = $request->get('status', 'draft');

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
        $wasUnpublished = $skill->status !== 'published';

        $skill->update([
            'status'           => 'published',
            'reviewed_by'      => auth()->id(),
            'reviewed_at'      => now(),
            'rejection_reason' => null,
        ]);

        if ($wasUnpublished) {
            $skill->profession->increment('skills_count');
        }

        return back()->with('success', "Skill aprobada y publicada.");
    }

    public function reject(Request $request, Skill $skill): RedirectResponse
    {
        $request->validate([
            'reason' => 'required|string|max:1000',
        ]);

        $wasPublished = $skill->status === 'published';

        $skill->update([
            'status'           => 'rejected',
            'rejection_reason' => $request->reason,
            'reviewed_by'      => auth()->id(),
            'reviewed_at'      => now(),
        ]);

        if ($wasPublished) {
            $skill->profession->decrement('skills_count');
        }

        return back()->with('success', "Skill rechazada.");
    }
}
