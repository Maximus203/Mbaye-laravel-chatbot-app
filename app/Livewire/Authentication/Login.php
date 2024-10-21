<?php

namespace App\Livewire\Authentication;

use App\Models\User;
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];
    }

    public function login()
    {
        if (!User::where('email', $this->email)->exists()) {
            $this->addError('auth.email', trans('auth.email_not_found'));
            return;
        } else {
            $validated = $this->validate();
            if (Auth::attempt($validated, $this->rememberMe)) {
                return redirect()->route('dashboard');
            }
            $this->addError("auth.failed", trans("auth.failed"));
        }
    }

    public function render()
    {
        return view('livewire.authentication.login');
    }
}
