<?php

namespace App\Observers;

use App\Models\Skill;
use Illuminate\Support\Facades\Cache;

class SkillObserver
{
    /**
     * Bust sitemap and any relevant OG image caches when a skill is saved.
     */
    public function saved(Skill $skill): void
    {
        Cache::forget('sitemap.data');

        if ($skill->slug) {
            Cache::forget("og.skill.{$skill->slug}");
        }
    }

    public function deleted(Skill $skill): void
    {
        Cache::forget('sitemap.data');

        if ($skill->slug) {
            Cache::forget("og.skill.{$skill->slug}");
        }
    }
}
