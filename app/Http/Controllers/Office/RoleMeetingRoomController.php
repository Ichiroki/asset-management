<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Office\RoleMeetingRoom;
use Illuminate\Http\Request;

class RoleMeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = RoleMeetingRoom::paginate(5);
        return view('pages.roleMeeting.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.roleMeeting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string'
        ]);
        RoleMeetingRoom::create($validated);

        return redirect()->route('role-meeting.index')->with('success', 'Role successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoleMeetingRoom $roleMeetingRoom)
    {
        $role = RoleMeetingRoom::where('id', $roleMeetingRoom->id)->first();
        return view('pages.roleMeeting.show', [
            'role' => $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoleMeetingRoom $roleMeetingRoom)
    {
        $status = ['active', 'inactive'];
        $role = RoleMeetingRoom::where('id', $roleMeetingRoom->id)->first();
        return view('pages.roleMeeting.edit', [
            'role' => $role,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoleMeetingRoom $roleMeetingRoom)
    {
        $validated = $request->validate([
            'name' => 'string',
            'status' => 'string'
        ]);

        RoleMeetingRoom::where('id', $roleMeetingRoom->id)->update($validated);

        return redirect()->route('role-meeting.index')->with('success', 'Role successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoleMeetingRoom $roleMeetingRoom)
    {
        RoleMeetingROom::destroy($roleMeetingRoom->id);

        return redirect()->route('role-meeting.index')->with('success', 'Role successfully deleted');
    }
}
