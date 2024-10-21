<?php

namespace App\Livewire\Authentication;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate]
    public $name = '';
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';
    #[Validate]
    public $password_confirmation = '';
    #[Validate]
    public $terms_accepted = false;


    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|min:3|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'terms_accepted' => 'required|accepted',
        ];
    }

    public function register()
    {
        $validated = $this->validate();

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
