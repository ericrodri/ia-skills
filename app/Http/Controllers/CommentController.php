<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Skill $skill): RedirectResponse
    {
        $request->validate([
            'content' => 'required|string|max:2000',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create([
            'user_id' => $request->user()->id,
            'skill_id' => $skill->id,
            'parent_id' => $request->parent_id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Comentario publicado.');
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        abort_unless(auth()->id() === $comment->user_id, 403);

        $comment->delete();

        return back()->with('success', 'Comentario eliminado.');
    }
}
