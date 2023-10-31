<?php

namespace App\Http\Controllers;
use App\Models\Asset\Laptop;
use App\Models\Asset\Vehicle;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all()->count();
        $laptop = Laptop::all()->count();
        return view('pages/dashboard', [
            'vehicle' => $vehicle,
            'laptop' => $laptop
        ]);
    }
}
