<?php

namespace App\Http\Controllers;

use App\Models\VehiclePIC;
use App\Http\Requests\StoreVehiclePICRequest;
use App\Http\Requests\UpdateVehiclePICRequest;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use App\Models\User;

class VehiclePICController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pics = VehiclePIC::latest()->paginate(5);

        return view('pages.pic.index', [
            'pics' => $pics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $departments = Department::all();

        $vehicles = Vehicle::all();

        return view('pages.pic.create', [
            'users' => $users,
            'departments' => $departments,
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiclePICRequest $request)
    {
        if($request->pic_user == 0) {
            VehiclePIC::create([
                'vehicle_id' => $request->vehicle_id,
                'user_id' => null,
                'department_id' => $request->pic_department,
            ]);
        } else if ($request->pic_department == 0) {
            VehiclePIC::create([
                'vehicle_id' => $request->vehicle_id,
                'user_id' => $request->pic_user,
                'department_id' => null,
            ]);
        }

        return redirect()->route('vehicle-pic.index')->with('success', 'PIC For this vehicle has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehiclePIC $vehiclePIC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($vehiclePIC)
    {
        $pic = VehiclePIC::find($vehiclePIC);
        $users = User::all();
        $departments = Department::all();
        $vehicles = Vehicle::all();

        return view('pages.pic.edit', [
            'pic' => $pic,
            'users' => $users,
            'departments' => $departments,
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiclePICRequest $request, $id)
    {
        if($request->pic_user == 0) {
            VehiclePIC::where('id', $id)->update([
                'vehicle_id' => $request->vehicle_id,
                'user_id' => null,
                'department_id' => $request->pic_department,
            ]);
        } else if ($request->pic_department == 0) {
            VehiclePIC::where('id', $id)->update([
                'vehicle_id' => $request->vehicle_id,
                'user_id' => $request->pic_user,
                'department_id' => null,
            ]);
        }
        return redirect()->route('vehicle-pic.index')->with('success', 'PIC for this Vehicle has been successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        VehiclePIC::where('id', $id)->delete();
        // $vehiclePIC->delete();

        return redirect()->route('vehicle-pic.index')->with('success', 'Data has been successfully deleted');
    }
}
