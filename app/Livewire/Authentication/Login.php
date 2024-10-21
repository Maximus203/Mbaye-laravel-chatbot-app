<?php

namespace App\Livewire\Authentication;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';
    public $rememberMe = false;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function login()
    {
        $validated = $this->validate();

        if (Auth::attempt($validated)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(["failed", trans("auth.failed")]);
    }

    public function render()
    {
        return view('livewire.authentication.login');
    }
}
