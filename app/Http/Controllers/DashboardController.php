<?php

namespace App\Http\Controllers;
use App\Charts\UserChart;
use App\Models\Asset\Vehicle;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all();

        $users = new UserChart;
        $users->labels(['One', 'Two', 'Three', 'Four']);
        $users->dataset('Jumlah Mobil', 'line', $vehicle);
        return view('pages/dashboard', [
            'users' => $users
        ]);
    }
}
