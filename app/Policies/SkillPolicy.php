<?php

namespace App\Policies;

use App\Models\Skill;
use App\Models\User;

class SkillPolicy
{
    /**
     * Solo el autor o un admin pueden ver una skill que no está publicada.
     */
    public function view(?User $user, Skill $skill): bool
    {
        if ($skill->status === 'published') {
            return true;
        }

        return $user !== null && ($user->id === $skill->user_id || $user->is_admin);
    }

    /**
     * El autor puede editar su propia skill; un admin, cualquiera.
     */
    public function update(User $user, Skill $skill): bool
    {
        return $user->id === $skill->user_id || $user->is_admin;
    }
}
