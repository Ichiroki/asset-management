<?php

namespace App\Http\Controllers\Loans;

use App\Http\Controllers\Controller;
use App\Models\Asset\Laptop;
use App\Models\Loans\LaptopLoans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = LaptopLoans::all();
        return view("pages.loans.laptop.index", compact("laptops"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $laptop = Laptop::all();
        return view("pages.loans.laptop.create", compact("laptop"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'user_id' =>  [
                `required|integer|in:$user->id`
            ],
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'status' => 'required|string',
            'purpose' => 'required|string',
            'laptop_id' => 'required|integer',
            'information' => 'nullable|string',
        ]);

        LaptopLoans::create([
            'user_id' => $user->id,
            'loan_date' => $validated['loan_date'],
            'return_date' => $validated['return_date'],
            'status' => $validated['status'],
            'purpose' => $validated['purpose'],
            'laptop_id' => $validated['laptop_id'],
            'information' => $validated['information'],
        ]);

        return redirect()->route('laptopLoans.index')->with('success', 'Your submission to loan vehicle successfully sended, please wait to accept the submission');
    }

    /**
     * Display the specified resource.
     */
    public function show(LaptopLoans $laptopLoans)
    {
        dd($laptopLoans);
        return view('pages.loans.laptop.show', ['laptop' => $laptopLoans]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaptopLoans $laptopLoans)
    {
        $laptopLoans->first();
        dd($laptopLoans);
        return view('pages.loans.laptop.edit', [
            'laptop' => $laptopLoans
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaptopLoans $laptopLoans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaptopLoans $laptopLoans)
    {
        $laptopLoans->delete();

        return redirect()->route('laptopLoans.index')->with('success', `you deleted the $laptopLoans->user->name\' ticket to loan laptop`);
    }
}
