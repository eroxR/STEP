<?php

namespace App\Policies;

use App\Models\User;
use App\Models\work_area;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkAreaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\work_area  $workArea
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, work_area $workArea)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\work_area  $workArea
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, work_area $workArea)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\work_area  $workArea
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, work_area $workArea)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\work_area  $workArea
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, work_area $workArea)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\work_area  $workArea
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, work_area $workArea)
    {
        //
    }
}
