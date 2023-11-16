<?php

namespace App\Http\Controllers\Loans\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Loans\LaptopLoans;
use App\Models\Loans\VehicleLoans;
use App\Notifications\Approve\LaptopApproveNotification;
use App\Notifications\Approve\VehicleApproveNotification;

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

        $vehicle->user->notify(new VehicleApproveNotification($vehicle));

        return redirect()->route('vehicleLoans.index')->with('success', `You approve $vehicle->user->name\'s vehicle loan ticket`);
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

        $laptop->user->notify(new LaptopApproveNotification($laptop));

        return redirect()->route('laptopLoans.index')->with('success', `You approve $laptop->user->name\'s laptop loan ticket`);
    }

    public function rejectLaptopLoan(LaptopLoans $laptop)
    {
        $this->authorize('approveLaptopLoan', $laptop);

        $laptop->reject();

        return redirect()->route('laptopLoans.index')->with('success', `You approve $laptop->user\'s laptop loan ticket`);
    }
}
