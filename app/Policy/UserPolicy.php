<?php

namespace App\Policies;

use App\Models\User; // Correct case for the User model
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Your logic for determining if the user can view any models
        return true; // or return false; based on your logic
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool // Correct case for the User model
    {
        // Your logic to determine if the user can view the model
        return true; // or return false; based on your logic
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool // Correct case for the User model
    {
        // Example logic: Check if the user has permission to update the model
        return $user->canUpdate($model); // Replace this with your actual logic
    }


    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool // Correct case for the User model
    {
        // Example logic: Check if the user has permission to delete the model
        return $user->canDelete($model); // Replace this with your actual logic
    }


    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool // Correct case for the User model
    {
        // Example logic: Check if the user has permission to restore the model
        return $user->canRestore($model); // Replace this with your actual logic
    }


    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool // Correct case for the User model
    {
        // Example logic: Check if the user has permission to force delete the model
        return $user->canForceDelete($model); // Replace this with your actual logic
    }

}
