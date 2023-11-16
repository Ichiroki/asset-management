<?php

namespace App\Http\Controllers;

use App\Models\Loans\VehicleLoans;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function vehicleLoansSearch(Request $request) {
        $search = $request->input('query');

        $results = VehicleLoans::whereHas('user', function ($query) use ($search) {
            $query->where('name', 'like', '%'.$search.'%');
        })->paginate(5);

        return response()->json([
            'vehicles' => $results
        ]);
    }
}
