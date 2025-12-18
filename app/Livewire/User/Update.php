<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Update extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $user = [];

    public function mount($id) {
        $this->user = User::findOrFail($id);

        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateUser(){
        $this->validate([

            'name'=> 'required|string|max:255',
            'email'=> 'nullable|email|unique:users,email,'. $this->user->id,
            'password' => 'nullable|confirmed|min:5'
        ]);

        $data = [
            'name' => $this->name,
            
        ];

        if($this->email) {
            $data['email'] = $this->email;
        }

        if($this->password){
            $data['password'] = Hash::make($this->password);
        }

        $this->user->update($data);

        session()->flash('sucess', 'Usuário atualizado com sucesso');

    }



    public function render()
    {
        return view('livewire.user.update');
    }
}
