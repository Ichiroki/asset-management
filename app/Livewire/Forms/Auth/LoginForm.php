<?php

namespace App\Livewire\Forms\Auth;

use Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required', message: 'Email is required')]
    #[Validate('email', message: 'This is not a valid email')]
    public $email;

    #[Validate('required', message: 'Password is required')]
    public $password;

    public function store()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Invalid Credentials');

            $this->reset();
        }
    }
}
