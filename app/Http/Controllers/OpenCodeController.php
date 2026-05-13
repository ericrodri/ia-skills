<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class OpenCodeController extends Controller
{
    public function import(Skill $skill): RedirectResponse
    {
        $prompt = sprintf("Genérame la skill \"%s\":\n\n%s", $skill->title, $skill->prompt_content);
        $opencodeApi = env('OPENCODE_API_URL', 'http://localhost:4096');

        // Try OpenCode API: create session and send prompt
        $session = Http::timeout(5)->asJson()->post("{$opencodeApi}/api/sessions", [
            'title' => $skill->title,
        ])->json();

        if (!empty($session['id'])) {
            Http::timeout(60)->asJson()
                ->post("{$opencodeApi}/api/sessions/{$session['id']}/prompt", [
                    'parts' => [['type' => 'text', 'text' => $prompt]],
                ]);
        }

        return redirect()->route('skills.show', $skill)
            ->with('success', 'Skill enviada a OpenCode. Revisa la app.');
    }
}
