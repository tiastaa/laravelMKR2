<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Maker;
use Illuminate\Auth\Access\Response;

class MakerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if (
            $user !== null
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Maker $maker): bool
    {
        if (
            $user !== null
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Maker $maker): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Maker $maker): bool
    {
        if (
            $user->role == 'admin' or
            $user->role == 'editor'
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Maker $maker): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Maker $maker): bool
    {
        return false;
    }
}
