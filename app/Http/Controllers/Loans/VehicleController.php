<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use App\Mail\Loans\VehicleLoansMail;
use App\Models\Loans\VehicleLoans;
use App\Models\Office\Vehicle;
use App\Notifications\VehicleLoanNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Notifications\Loans\VehicleLoansNotification;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_param = $request->query('search');

        $vehicles = VehicleLoans::paginate(5);

        if($search_param !== '') {
            $vehicles = VehicleLoans::search($search_param)->paginate(5);
        }

        // dd($vehicles);

        return view('pages.loans.vehicle.index', [
            'vehicles' => $vehicles,
            'search_param' => $search_param,
            'title' => "Vehicle Loans"
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
            'vehicle' => $vehicle,
            'title' => "Create Ticket Loan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'user_id' => [
                `required|integer|in:$user->id`,
            ],
            'department_id' => [
                'required',
                'integer',
                `in:$user->department->id`
            ],
            'vehicle_id' => 'required|integer',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'purpose' => 'required|string',
            'information' => 'nullable|string',
        ]);

        // dd($validated);

        $create = VehicleLoans::create([
            'user_id' => $user->id,
            'department_id' => $validated['department_id'],
            'vehicle_id' => (int) $validated['vehicle_id'],
            'loan_date' => $validated['loan_date'],
            'return_date' => $validated['return_date'],
            'purpose' => $validated['purpose'],
            'information' => $validated['information']
        ]);

        $bod = User::role('approval_bod')->get();

        foreach($bod as $b) {
            $b->notify(new VehicleLoansNotification($create));
        }

        return redirect()->route('vehicleLoans.index')->with('success', 'Your ticket successfully created. please wait for approval');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleLoans $vehicle)
    {
        return view('pages.loans.vehicle.show', [
            'vehicle' => $vehicle,
            'title' => "Show Ticket"
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleLoans $vehicle)
    {
        $approve = ["Waiting Approval", "Approve", "Rejected"];
        $vehicle->get();
        $vehicles = Vehicle::all();
        return view('pages.loans.vehicle.edit', [
            'vehicle' => $vehicle,
            'vehicles' => $vehicles,
            'approve' => $approve,
            'title' => "Edit Ticket"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleLoans $vehicle)
    {
        $user = $vehicle->user;
        $department = $vehicle->department;
        $validate = $request->validate([
            'user_id' => [
                `required|integer|in:$user->name`,
            ],
            'department_id' => [
                `required|in:$department`
            ],
            'vehicle_id' => 'required|integer',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'status' => 'required|string',
            'number_plate' => 'required|string',
            'capacity' => 'required|integer',
            'purpose' => 'required|string',
            'information' => 'nullable|string',
            'loan_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $vehicle->update([
            'user_id' => $vehicle->user->id,
            'department_id' => $validate['department'],
            'vehicle_id' => (int) $validate['vehicle_id'],
            'loan_date' => $validate['loan_date'],
            'return_date' => $validate['return_date'],
            'status' => $validate['status'],
            'number_plate' => $validate['number_plate'],
            'capacity' => $validate['capacity'],
            'purpose' => $validate['purpose'],
            'loan_status' => $validate['loan_status'],
            'information' => $validate['information']
        ]);

        return redirect()->route('vehicleLoans.index')->with('success', 'Ticket successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleLoans $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicleLoans.index')->with('success', `you deleted the $vehicle->user->name\'s ticket to loan vehicle`);
    }
}
