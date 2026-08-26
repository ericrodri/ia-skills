<?php

namespace App\Observers;

use App\Models\Skill;
use Illuminate\Support\Facades\Cache;

class SkillObserver
{
    /**
     * Invalida el sitemap, el feed y los contadores del sitio cuando una skill
     * cambia, además de su imagen OG.
     */
    public function saved(Skill $skill): void
    {
        $this->flush($skill);
    }

    public function deleted(Skill $skill): void
    {
        $this->flush($skill);
    }

    private function flush(Skill $skill): void
    {
        Cache::forget('sitemap.skills.rows');
        Cache::forget('feed.items');
        Cache::forget('site.skills_count');
        Cache::forget('site.professions');

        if ($skill->slug) {
            Cache::forget("og.skill.{$skill->slug}");
        }
    }
}
