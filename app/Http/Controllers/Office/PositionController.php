<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Office\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::paginate(5);
        return view('pages.position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('positions')->insert([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('position.index')->with('success', 'Position create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        $position::find($position->id);
        return view('pages.position.show', [
            'position' => $position
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $status = ['Active', 'Inactive'];
        $position = Position::where('id', $id)->first();
        return view('pages.position.edit', [
            'position' => $position,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Position::where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);

        return redirect()->route('position.index')->with('success', 'Position successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        Position::where('id', $position->id)->delete();
        return redirect()->route('position.index')->with('success', 'Position successfully deleted');
    }
}
