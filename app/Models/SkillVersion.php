<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkillVersion extends Model
{
    protected $fillable = ['skill_id', 'user_id', 'version', 'prompt_content', 'changelog'];

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }

    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
