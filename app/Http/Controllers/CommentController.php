<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Skill;
use App\Notifications\CommentReplied;
use App\Notifications\NewCommentOnSkill;
use App\Support\Notify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    public function store(Request $request, Skill $skill): RedirectResponse
    {
        $request->validate([
            'content' => 'required|string|max:2000',
            // La respuesta tiene que colgar de un comentario de esta misma skill.
            'parent_id' => ['nullable', Rule::exists('comments', 'id')->where('skill_id', $skill->id)],
        ]);

        $comment = Comment::create([
            'user_id' => $request->user()->id,
            'skill_id' => $skill->id,
            'parent_id' => $request->parent_id,
            'content' => $request->content,
        ]);

        $this->notify($comment, $skill);

        return back()->with('success', 'Comentario publicado.');
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        abort_unless(auth()->id() === $comment->user_id, 403);

        $comment->delete();

        return back()->with('success', 'Comentario eliminado.');
    }

    /**
     * Avisa al autor de la skill y, si es una respuesta, a quien escribió el
     * comentario original. Nadie recibe aviso de su propia actividad, y si el
     * autor de la skill es también el del comentario respondido recibe un
     * único email (el de respuesta, que es el más específico).
     */
    private function notify(Comment $comment, Skill $skill): void
    {
        $comment->setRelation('skill', $skill)->load('user:id,name');
        $actorId = $comment->user_id;
        $notified = [];

        if ($comment->parent_id) {
            $parentAuthor = Comment::find($comment->parent_id)?->user;

            if ($parentAuthor && $parentAuthor->id !== $actorId) {
                Notify::send($parentAuthor, new CommentReplied($comment));
                $notified[] = $parentAuthor->id;
            }
        }

        $skillAuthor = $skill->author;

        if ($skillAuthor && $skillAuthor->id !== $actorId && ! in_array($skillAuthor->id, $notified, true)) {
            Notify::send($skillAuthor, new NewCommentOnSkill($comment));
        }
    }
}
