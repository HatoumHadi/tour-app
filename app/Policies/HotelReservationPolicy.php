<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HotelReservation;
use Illuminate\Auth\Access\HandlesAuthorization;

class HotelReservationPolicy
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
        return $user->can('view_any_services::hotel::reservation');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('view_services::hotel::reservation');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_services::hotel::reservation');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('update_services::hotel::reservation');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('delete_services::hotel::reservation');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_services::hotel::reservation');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HotelReservation  $hotelReservation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, HotelReservation $hotelReservation)
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('{{ Reorder }}');
    }

}
