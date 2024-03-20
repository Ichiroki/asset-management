<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.authentication')]
class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->form->store();
    }

    public function render()
    {
        $title = config('app.name').'Login';

        return view('livewire.auth.login', compact('title'));
    }
}
