<?php

namespace App\Http\Controllers\Loans\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Asset\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckAvailabilityController extends Controller
{
    public function checkVehicleAvailability($vehicle)
    {
        $vehicle = Vehicle::find($vehicle);

        if($vehicle->status === 'Active') {
            return response()->json(['available' => true, 'message' => 'Available', 'vehicle' => $vehicle]);
        } else if ($vehicle->status === "On Loan") {
            return response()->json(['available' => false, 'message'=> 'Occupied' , 'vehicle' => $vehicle]);
        }

        return response()->json(['available' => false, 'message'=> 'This vehicle is not available']);
    }
}
