<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthenticationController extends Controller
{

    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|max:255|email:rfc,dns|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, true)) {
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
