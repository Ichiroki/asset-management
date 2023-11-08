<?php

namespace App\Policies\Loans;

use App\Models\Loans\LaptopLoans;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LaptopLoansPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function approveLaptopLoans(User $user) {
        if($user->hasRole('approval_it') || $user->hasRole('super_admin')) {
            return true;
        }
    }
}
