<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartmentReq;
use App\Http\Requests\UpdateDepartmentReq;
use App\Models\Office\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::paginate(5);
        return view('pages/department/index', [
            'departments' => $departments,
        'title' => "Department"
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('searchBar');
        $department = Department::where('name','LIKE','%'.$query.'%')->get();

        return response()->json($department);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = ['Active', 'Inactive'];
        return view('pages.department.create', [
            'status' => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentReq $request)
    {
        DB::table('departments')->insert([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('department.index')->with('success', 'Department create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $department = Department::find($id);
        return view('pages.department.show', [
            'department' => $department
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $status = ['Active', 'Inactive'];
        $department = Department::where('id', $id)->first();
        return view('pages.department.edit', [
            'department' => $department,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentReq $request, $id)
    {
        Department::where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);

        return redirect()->route('department.index')->with('success', 'Department successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Department::where('id', $id)->delete();

        return redirect()->route('department.index')->with('success', 'Department delete succesfully');
        // return response()->json([
        //     'success' => 'Department delete successfully'
        // ], 201);
    }
}
