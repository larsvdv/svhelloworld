<?php

namespace App\Policies;

use App\User;
use App\Subscription;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscriptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subscription.
     *
     * @param  User  $user
     * @param  Subscription  $subscription
     * @return mixed
     */
    public function view(User $user, Subscription $subscription)
    {
        return $user->id === $subscription->user_id;
    }

    /**
     * Determine whether the user can create subscriptions.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the subscription.
     *
     * @param  User  $user
     * @param  Subscription  $subscription
     * @return mixed
     */
    public function update(User $user, Subscription $subscription)
    {
        return $user->id === $subscription->user_id;
    }

    /**
     * Determine whether the user can delete the subscription.
     *
     * @param  User  $user
     * @param  Subscription  $subscription
     * @return mixed
     */
    public function delete(User $user, Subscription $subscription)
    {
        return $user->id === $subscription->user_id;
    }
}
