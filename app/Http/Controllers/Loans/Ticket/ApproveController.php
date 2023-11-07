<?php

namespace App\Http\Controllers\Loans\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Loans\VehicleLoans;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(VehicleLoans::class, 'vehicle');
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

    public function approveLaptopLoan(VehicleLoans $vehicle)
    {
        $this->authorize('approveLaptopLoan', $vehicle);

        $vehicle->approve();

        return redirect()->route('vehicleLoans.index')->with('success', `You approve $vehicle->user\'s vehicle loan ticket`);
    }

    public function rejectLaptopLoan(VehicleLoans $vehicle)
    {
        $this->authorize('approveLaptopLoan', $vehicle);

        $vehicle->reject();

        return redirect()->route('vehicleLoans.index')->with('success', `You approve $vehicle->user\'s vehicle loan ticket`);
    }
}
