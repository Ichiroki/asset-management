<?php

namespace App\Livewire\Pages\Assets;

use Livewire\Component;
use App\Models\Asset\Vehicle as VehicleAsset;

class Vehicle extends Component
{
    public $search = '';

    public function render()
    {
        $vehicles = $this->search ? VehicleAsset::where('type', 'LIKE', "%{$this->search}%")
                                                ->orWhere('pic', 'LIKE', "%{$this->search}")
                                                ->orWhere('number_plates', 'LIKE', "%{$this->search}%")
                                                : VehicleAsset::paginate(5);
        return view('livewire.pages.assets.vehicle', compact('vehicles'));
    }
}
