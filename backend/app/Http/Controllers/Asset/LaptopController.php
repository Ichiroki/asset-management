<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\StoreLaptopRequest;
use App\Models\Asset\Laptop;
use App\Models\User;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = Laptop::paginate(5);
        return view('pages.laptop.index', [
            'laptops' => $laptops,
            'title' => "Laptop"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaptopRequest $request)
    {
        Laptop::create([
            'name' => $request->name,
            'no_asset' => $request->no_asset,
            'date_used' => $request->date_used,
            'processor' => $request->processor,
            'ram' => $request->ram,
            'main_storage' => $request->main_storage,
            'extend_storage' => $request->extend_storage,
            'vga' => $request->vga,
            'monitor' => $request->monitor,
        ]);

        return redirect()->route('laptop.index')->with('success', 'Laptop successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $laptop = Laptop::where('id', $id)->first();

        return view('pages.laptop.show', [
            'laptop' => $laptop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laptop = Laptop::where('id', $id)->first();

        return view('pages.laptop.edit', [
            'laptop' => $laptop
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Laptop::where('id', $id)->delete();

        return redirect()->route('laptop.index')->with('success', 'Laptop successfully deleted');
    }
}
