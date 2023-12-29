<?php

namespace App\Livewire\Pages\Loans;

use Livewire\Component;
use App\Models\Loans\VehicleLoans as Vehicle;

class VehicleLoans extends Component
{
    public function render()
    {
        $vehicles = Vehicle::paginate(5);

        return view('livewire.pages.loans.vehicle-loans', compact('vehicles'));
    }
}
