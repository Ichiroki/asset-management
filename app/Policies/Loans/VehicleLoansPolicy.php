<?php

namespace App\Policies\Loans;

use App\Models\Loans\VehicleLoans;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class VehicleLoansPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('approval_bod');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, VehicleLoans $vehicleLoans)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, VehicleLoans $vehicleLoans)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, VehicleLoans $vehicleLoans)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, VehicleLoans $vehicleLoans)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, VehicleLoans $vehicleLoans)
    {
        //
    }
}
