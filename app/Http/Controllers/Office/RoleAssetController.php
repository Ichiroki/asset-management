<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use App\Models\Office\RoleAsset;
use Illuminate\Http\Request;

class RoleAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = RoleAsset::paginate(5);
        return view('pages.roleAsset.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.roleAsset.create');
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
        RoleAsset::create($validated);

        return redirect()->route('role-asset.index')->with('success', 'Role successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoleAsset $roleAsset)
    {
        $roleAsset::find($roleAsset->id);
        return view('pages.roleAsset.show', [
            'role' => $roleAsset
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoleAsset $roleAsset)
    {
        $status = ['active', 'inactive'];
        $roleAsset::find($roleAsset->id);
        return view('pages.roleAsset.edit', [
            'role' => $roleAsset,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoleAsset $roleAsset)
    {
        $validated = $request->validate([
            'name' => 'string',
            'status' => 'string'
        ]);

        RoleAsset::where('id', $roleAsset->id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);

        return redirect()->route('role-asset.index')->with('success', 'Role successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoleAsset $roleAsset)
    {
        RoleAsset::destroy($roleAsset->id);

        return redirect()->route('role-asset.index')->with('success', 'Role successfully deleted');
    }
}
