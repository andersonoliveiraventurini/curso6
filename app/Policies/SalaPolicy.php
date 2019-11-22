<?php

namespace App\Policies;

use App\Models\Sala;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any salas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the sala.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Sala  $sala
     * @return mixed
     */
    public function view(User $user, Sala $sala)
    {        
        return in_array($user->permissao, [1]);
    }

    /**
     * Determine whether the user can create salas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->permissao, [1]);
    }

    /**
     * Determine whether the user can update the sala.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Sala  $sala
     * @return mixed
     */
    public function update(User $user, Sala $sala)
    {
        //
    }

    /**
     * Determine whether the user can delete the sala.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Sala  $sala
     * @return mixed
     */
    public function delete(User $user, Sala $sala)
    {
        
    }

    /**
     * Determine whether the user can restore the sala.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Sala  $sala
     * @return mixed
     */
    public function restore(User $user, Sala $sala)
    {
        
    }

    /**
     * Determine whether the user can permanently delete the sala.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Sala  $sala
     * @return mixed
     */
    public function forceDelete(User $user, Sala $sala)
    {
        //
    }
}
