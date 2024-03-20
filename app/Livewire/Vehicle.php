<?php

namespace App\Livewire;

use App\Models\Asset\Vehicle as AssetVehicle;
use Livewire\Attributes\Layout;
use Livewire\Component;

// #[Layout('layout.app')]
class Vehicle extends Component
{
    public function render()
    {
        $vehicles = AssetVehicle::latest()->paginate(5);

        return view('livewire.vehicle', [
            'vehicles' => $vehicles
        ]);
    }
}
