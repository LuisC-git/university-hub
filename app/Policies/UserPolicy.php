<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user,User $model): bool
    {
        return $user->id === $model ->id;
    }
}
