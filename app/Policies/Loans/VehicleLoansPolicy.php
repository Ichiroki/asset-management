<?php

namespace App\Policies\Loans;

use App\Models\User;

class VehicleLoansPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function approveVehicleLoan(User $user)
    {
        if ($user->hasRole('approval_bod') || $user->hasRole('super_admin')) {
            return true;
        }
    }
}
