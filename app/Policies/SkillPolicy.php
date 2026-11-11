<?php

namespace App\Policies;

use App\Models\Skill;
use App\Models\User;

class SkillPolicy
{
    /**
     * Solo el autor o un admin pueden ver una skill que no está publicada.
     * Una privada, solo su autor: ni siquiera un admin.
     */
    public function view(?User $user, Skill $skill): bool
    {
        if ($skill->status === 'published') {
            return true;
        }

        if ($user === null) {
            return false;
        }

        if ($skill->isPrivate()) {
            return $user->id === $skill->user_id;
        }

        return $user->id === $skill->user_id || $user->is_admin;
    }

    /**
     * El autor puede editar su propia skill; un admin, cualquiera menos las privadas.
     */
    public function update(User $user, Skill $skill): bool
    {
        if ($skill->isPrivate()) {
            return $user->id === $skill->user_id;
        }

        return $user->id === $skill->user_id || $user->is_admin;
    }
}
