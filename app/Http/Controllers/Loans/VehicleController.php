<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use App\Models\Loans\VehicleLoans;
use App\Models\Office\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = VehicleLoans::paginate(5);
        return view('pages.loans.vehicle.index', [
            'vehicles' => $vehicles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $department = $user->department;
        $vehicle = Vehicle::all();
        return view('pages.loans.vehicle.create', [
            'user' => $user,
            'department' => $department,
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $validate = $request->validate([
            'user_id' => [
                `required|integer|in:$user->id`,
            ],
            'department' => [
                'required',
                Rule::in([$user->department->name])
            ],
            'vehicle_id' => 'required|integer',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'status' => 'required|string',
            'number_plate' => 'required|string',
            'capacity' => 'required|integer',
            'purpose' => 'required|string',
            'loan_status' => 'nullable|string',
            'notes' => 'required|string',
        ]);

        VehicleLoans::create([
            'user_id' => $user->id,
            'department' => $validate['department'],
            'vehicle_id' => (int) $validate['vehicle_id'],
            'loan_date' => $validate['loan_date'],
            'return_date' => $validate['return_date'],
            'status' => $validate['status'],
            'number_plate' => $validate['number_plate'],
            'capacity' => $validate['capacity'],
            'purpose' => $validate['purpose'],
            'loan_status' => $validate['loan_status'],
            'notes' => $validate['notes'],
        ]);

        return redirect()->route('vehicleLoans.index')->with('success', 'Your submission to loan vehicle successfully sended, please wait to accept the submission');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleLoans $vehicle)
    {
        return view('pages.loans.vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        $vehicles = Vehicle::all();
        dd($vehicle, $vehicles);
        return view('pages.loans.vehicle.edit', [
            'veh' => $vehicle,
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleLoans $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicleLoans.index')->with('success', 'you deleted the Fahrezi Rizqiawan\'s ticket to loan vehicle');
    }
}
