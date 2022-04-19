<?php

namespace App\Policies;

use App\Models\User;
use App\Models\payment_type;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentTypePolicy
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
     * @param  \App\Models\payment_type  $paymentType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, payment_type $paymentType)
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
     * @param  \App\Models\payment_type  $paymentType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, payment_type $paymentType)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\payment_type  $paymentType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, payment_type $paymentType)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\payment_type  $paymentType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, payment_type $paymentType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\payment_type  $paymentType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, payment_type $paymentType)
    {
        //
    }
}
