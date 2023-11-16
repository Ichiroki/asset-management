<?php

namespace App\Http\Controllers;
use App\Models\Asset\Laptop;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'users' => User::count(),
            'departments' => Department::count(),
            'vehicles' => Vehicle::count(),
            'laptops' => Laptop::count()
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('pages.profile.profile', [
            'user' => $user,
            'title' => "Profile"
        ]);
    }
}
