<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\Loans\LaptopLoans;
use App\Models\Loans\VehicleLoans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $vehicles = VehicleLoans::latest()->get();
        $laptops = LaptopLoans::latest()->get();

        return view('pages.profile.profile', [
            'user' => $user,
            'title' => "Profile",
            'vehicle' => $vehicles,
            'laptop' => $laptops
        ]);
    }

    public function update(User $user, ProfileUpdateRequest $request) {

        if(empty($request['password'])) {
            $request['password'] = $user->password;
        }

        if($user->avatar !== 'person.png' && Storage::exists('/img/'.$user->avatar)) {
            Storage::delete('/img/'.$user->avatar);
        }

        if($request->hasFile('avatar')) {
            $avatarName = Str::random(10).'.'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('/img/', $avatarName, 'public');
            $user->update(['avatar' => $avatarName]);
        }

        $user->update([
            'name' => $request['name'],
            'password' => $request['password'],
            'email' => $request['email'],
        ]);
        return redirect()->back()->with('success', 'Your profile successfully changed');
    }
}
