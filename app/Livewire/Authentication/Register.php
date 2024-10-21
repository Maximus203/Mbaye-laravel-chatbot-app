<?php

namespace App\Livewire\Authentication;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $terms_accepted = false;


    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'terms_accepted' => 'required|accepted',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.authentication.register');
    }
}
