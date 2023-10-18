<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Department::paginate(5);
        return view('pages.department.index', [
            'departments' => $departments
        ]);
    }

    public function store(Request $request, Department $department) {
        $validate = $request->validate([

        ]);

        $depart = Department::create($validate);

        return response()->json($depart, 201);
    }
}
