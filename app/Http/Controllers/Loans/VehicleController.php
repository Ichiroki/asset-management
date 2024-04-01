<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use App\Mail\VehicleLoansMail as MailVehicleLoansMail;
use App\Models\Asset\Vehicle as AssetVehicle;
use App\Models\Loans\VehicleLoans;
use App\Models\Office\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class VehicleController extends Controller
{
    public function index($request = null)
    {
        $vehicles = VehicleLoans::latest()->paginate(5);
        $search_param = $request ? $request->query('search') : '';

        if($search_param !== '') {
            $vehicles = VehicleLoans::search($search_param)->paginate(5);
        }

        return view('pages.loans.vehicle.index', [
            'vehicles' => $vehicles,
        ]);
    }

    public function create()
    {
        $user = User::all();
        $department = Department::all();
        $vehicle = AssetVehicle::whereNot('status', 'Inactive')->get();
        return view('pages.loans.vehicle.create', [
            'users' => $user,
            'departments' => $department,
            'vehicles' => $vehicle
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'user' => [
                `required|integer|in:$user->id`,
            ],
            'vehicle' => 'required|integer',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'purpose' => 'required|string',
            'information' => 'nullable|string',
        ]);

        VehicleLoans::create([
            'user_id' => $user->id,
            'vehicle_id' => $validated['vehicle'],
            'loan_date' => $validated['loan_date'],
            'return_date' => $validated['return_date'],
            'purpose' => $validated['purpose'],
            'information' => $validated['information']
        ]);

        return redirect()->route('vehicleLoans.index')->with('success', 'Your submission to loan vehicle successfully sended, please wait to accept the submission');
    }

    public function show(VehicleLoans $vehicle)
    {
        dd($vehicle);
        return view('pages.loans.vehicle.show', compact('vehicle'));
    }

    public function edit(VehicleLoans $vehicle)
    {
        $approve = ["Waiting Approval", "Approve", "Rejected"];
        $vehicle->get();
        $vehicles = AssetVehicle::all();
        return view('pages.loans.vehicle.edit', [
            'vehicle' => $vehicle,
            'vehicles' => $vehicles,
            'approve' => $approve
        ]);
    }

    public function update(Request $request, VehicleLoans $vehicle)
    {
        $user = $vehicle->user;
        $department = $vehicle->department;
        $validate = $request->validate([
            'user_id' => [
                `required|integer|in:$user->name`,
            ],
            'department' => [
                `required|in:$department`
            ],
            'vehicle_id' => 'required|integer',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'status' => 'required|string',
            'purpose' => 'required|string',
            'information' => 'nullable|string',
            'loan_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $vehicle->update([
            'user_id' => $vehicle->user->id,
            'department' => $validate['department'],
            'vehicle_id' => (int) $validate['vehicle_id'],
            'loan_date' => $validate['loan_date'],
            'return_date' => $validate['return_date'],
            'status' => $validate['status'],
            'purpose' => $validate['purpose'],
            'loan_status' => $validate['loan_status'],
            'information' => $validate['information']
        ]);

        return redirect()->route('vehicleLoans.index')->with('success', 'Ticket successfully edited');
    }

    public function destroy(VehicleLoans $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicleLoans.index')->with('success', `you deleted the $vehicle->user->name\'s ticket to loan vehicle`);
    }
}
