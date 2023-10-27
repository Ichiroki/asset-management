<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Office\Department;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function departmentAPI(Request $request) {
        $department = Department::all();

        return response()->json($department);
    }
}
