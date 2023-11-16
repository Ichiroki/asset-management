<?php

namespace App\Providers;

use App\Models\Loans\VehicleLoans;
use App\Policies\Loans\VehicleLoansPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        VehicleLoans::class => VehicleLoansPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::before(function($user, $ability) {
            return $user->hasRole('super_admin') ? true : null;
        });
    }
}
