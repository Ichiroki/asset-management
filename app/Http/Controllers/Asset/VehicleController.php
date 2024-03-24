<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\Vehicle\StoreVehicleRequest;
use App\Http\Requests\Asset\Vehicle\UpdateVehicleRequest;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use App\Models\User;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle = Vehicle::paginate(5);
        return view('pages/vehicle/index', [
            'vehicles' => $vehicle,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $department = Department::all();

        return view('pages/vehicle/create', [
            'departments' => $department,
            'users' => $users,
            'title' => "Add Vehicle"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        $data = [
            'type' => $request->type,
            'number_plates' => $request->number_plates,
            'capacity' => $request->capacity,
            'status' => $request->status
        ];

        Vehicle::create($data);

        return redirect()->route('vehicle.index')->with('success', 'Vehicle successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehicle = Vehicle::where('id', $id)->first();

        return view('pages/vehicle/show', [
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $status = [
            'Active',
            'Deactive'
        ];

        $vehicle = Vehicle::find($id);
        return view('pages.vehicle.edit', [
            'vehicle' => $vehicle,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, $id)
    {
        Vehicle::find($id)->update([
            'type' => $request->type,
            'number_plates' => $request->number_plates,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('vehicle.index')->with('success', 'Vehicle successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Vehicle::where('id', $id)->delete();

        return redirect()->route('vehicle.index')->with('success', 'Vehicle successfully deleted');
    }
}
