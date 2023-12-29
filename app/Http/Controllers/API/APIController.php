<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Asset\Laptop;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;

class APIController extends Controller
{
    public function departmentAPI()
    {
        $department = Department::all();

        return response()->json($department);
    }

    public function laptopAPI()
    {
        $laptop = Laptop::all();

        return response()->json($laptop);
    }

    public function vehicleAPI()
    {
        $vehicle = Vehicle::all();

        return response()->json($vehicle);
    }
}
