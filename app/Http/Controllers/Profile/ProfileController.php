<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('pages.profile.profile', [
            'user' => $user,
            'title' => "Profile"
        ]);
    }

    public function update(User $user, Request $request) {

        $validated = $request->validate([
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:7128',
            'name' => 'nullable|string',
            'email' => 'nullable|string|email|exists:users,email',
            'password' => 'nullable|string',
            'confPassword' => 'nullable|string|same:password'
        ]);

        if(empty($validated['password'])) {
            unset($validated['password']);
        }

        if($user->avatar !== 'person.png') {
            Storage::delete('/img/'.$user->avatar);
        }

        if($request->hasFile('avatar')) {
            $avatarName = Str::random(10).'.'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('/img/', $avatarName, 'public');
            $user->update(['avatar' => $avatarName]);
        }

        $user->update([
            'avatar' => $validated['avatar'],
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        return redirect()->back()->with('success', 'Your profile successfully changed');
    }
}
