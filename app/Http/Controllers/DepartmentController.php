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
}
