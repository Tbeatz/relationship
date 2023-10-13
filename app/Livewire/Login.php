<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $showpw = false;

    public function login(){
        $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/dashboard');
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
            return redirect()->back();
        }
    }

    public function toggleShowpw(){
        $this->showpw = !$this->showpw;
    }

    public function render()
    {
        return view('livewire.login');
    }
}
