<?php

namespace App\Http\Controllers;
use App\Models\Asset\Laptop;
use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'users' => User::count(),
            'departments' => Department::count(),
            'vehicles' => Vehicle::count(),
            'laptops' => Laptop::count()
        ]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('pages.profile.profile', [
            'user' => $user,
            'title' => "Profile"
        ]);
    }

    public function welcome() {
        return view('welcome');
    }

    // public function changeProfile($request) {
    //     $request->validate([
    //         'avatar' => 'nullable|image|mimes:png,jpg|max:2048'
    //     ]);

    //     $user = Auth::user();

    //     if($user->avatar === 'person.png') {
    //         Storage::putFile('storage/img/'.$user->avatar);
    //     } else {
    //         Storage::delete('storage/img/'.$user->avatar);
    //     }

    //     $avatarName = Str::random(10).'.'.$request->file('avatar')->getClientOriginalExtension();
    //     $request->file('avatar')->storeAs('storage/img/', $avatarName, 'public');

    //     $user->update(['avatar' => $avatarName]);

    //     return redirect()->back()->with('success', 'Avatar has been changed');
    // }
}
