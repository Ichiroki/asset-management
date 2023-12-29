<?php

namespace App\Livewire\Pages;

use App\Models\Asset\Laptop;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard', [
            'vehicles' => Vehicle::count(),
            'laptops' => Laptop::count(),
            'departments' => Department::count(),
            'users' => User::count(),
        ]);
    }
}
