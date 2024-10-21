<?php

namespace App\Livewire\Header;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{

    public function render()
    {
        return view('livewire.header.navigation');
    }
    public function toggleDarkMode(Request $request)
    {
        if ($request->session()->has('dark')) {
            $request->session()->forget('dark');
        } else {
            $request->session()->put('dark', true);
        }
        $routeName = str_replace('http://127.0.0.1:8000', '', str_replace('livewire/update', '', $request->url()));
        redirect($routeName);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
