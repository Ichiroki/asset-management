<?php

namespace App\Http\Controllers\Loans\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Loans\LaptopLoans;
use App\Models\Loans\VehicleLoans;

class ApproveController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(VehicleLoans::class, 'vehicle');
        $this->authorizeResource(LaptopLoans::class, 'laptop');
    }

    public function approveVehicleLoan(VehicleLoans $vehicle)
    {
        $this->authorize('approveVehicleLoan', $vehicle);

        $vehicle->approve();

        return redirect()->route('vehicleLoans.index')->with('success', `You approve $vehicle->user\'s vehicle loan ticket`);
    }

    public function rejectVehicleLoan(VehicleLoans $vehicle)
    {
        $this->authorize('approveVehicleLoan', $vehicle);

        $vehicle->reject();

        return redirect()->route('vehicleLoans.index')->with('success', `You approve $vehicle->user\'s vehicle loan ticket`);
    }

    public function approveLaptopLoan(LaptopLoans $laptop)
    {
        $this->authorize('approveLaptopLoan', $laptop);

        $laptop->approve();

        return redirect()->route('laptopLoans.index')->with('success', `You approve $laptop->user\'s laptop loan ticket`);
    }

    public function rejectLaptopLoan(LaptopLoans $laptop)
    {
        $this->authorize('approveLaptopLoan', $laptop);

        $laptop->reject();

        return redirect()->route('laptopLoans.index')->with('success', `You approve $laptop->user\'s laptop loan ticket`);
    }
}
