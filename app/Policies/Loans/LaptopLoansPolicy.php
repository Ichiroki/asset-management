<?php

namespace App\Policies\Loans;

use App\Models\User;

class LaptopLoansPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function approveLaptopLoan(User $user)
    {
        if ($user->hasRole('approval_it') || $user->hasRole('super_admin')) {
            return true;
        }
    }
}
