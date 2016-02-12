<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(User $current_user, User $resource_user)
    {
        // Admin can create user
        return $current_user->isAdmin();
    }

    public function update(User $current_user, User $resource_user)
    {
        // Everyone can update self
        // Admin can update other users that are 'owned'
        return ($current_user->id === $resource_user->id) ||
            ($current_user->isAdmin() && $current_user->owns($resource_user)) ;
    }
}
