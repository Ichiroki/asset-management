<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)) {
            Session::flash('success', 'Login success');
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors(['email' => 'invalid credentials']);
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
