<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $terms, $confirmPassword, $isTerms = false, $showpw = false, $showcpw = false;

    public function storeUser(){
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'confirmPassword' => 'required|same:password',
            'terms' => 'required',
        ], [
            'terms.required' => '| You have to agree our policy.',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return $this->redirect('/dashboard', navigate:true);
    }

    public function toggleShowpw(){
        $this->showpw = !$this->showpw;
    }

    public function toggleShowcpw(){
        $this->showcpw = !$this->showcpw;
    }

    public function toggleTerms(){
        $this->isTerms = !$this->isTerms;
    }

    public function render()
    {
        return view('livewire.register');
    }
}
