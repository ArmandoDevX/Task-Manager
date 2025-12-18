<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role ='user';

    public function register() {

        $this->validate([
            'name'=> 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:5',
            'role' => 'required|in:user,superadmin',
        
        ]);

        User::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> Hash::make($this->password),
            'role'=> $this->role,
        ]);

        return redirect()->route('user.all');

    }



    public function render()
    {
        return view('livewire.auth.register');
    }
}
