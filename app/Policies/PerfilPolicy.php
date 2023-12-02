<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class PerfilPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

}
