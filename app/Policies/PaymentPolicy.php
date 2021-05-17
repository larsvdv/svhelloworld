<?php

namespace App\Policies;

use App\User;
use App\Payment;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the payment.
     *
     * @param User $user
     * @param  Payment  $payment
     * @return mixed
     */
    public function view(User $user, Payment $payment)
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Determine whether the user can create payments.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the payment.
     *
     * @param User $user
     * @param  Payment  $payment
     * @return mixed
     */
    public function update(User $user, Payment $payment)
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Determine whether the user can pay the payment.
     *
     * @param User $user
     * @param  Payment  $payment
     * @return mixed
     */
    public function pay(User $user, Payment $payment)
    {
        return $user->id === $payment->user_id;
    }

    /**
     * Determine whether the user can delete the payment.
     *
     * @param User $user
     * @param  Payment  $payment
     * @return mixed
     */
    public function delete(User $user, Payment $payment)
    {
        return $user->id === $payment->user_id;
    }
}
