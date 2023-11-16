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
    public function approveVehicleLoan(User $user) {
        if($user->hasRole('approval_bod') || $user->hasRole('super_admin')) {
            return true;
        }
    }
}
