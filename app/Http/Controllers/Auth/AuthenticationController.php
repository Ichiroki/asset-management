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

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
