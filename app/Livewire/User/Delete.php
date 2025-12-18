<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Delete extends Component
{

    public User $user;

    public function mount($id){

        $this->user = User::findOrFail($id);

    }

    public function delete(){

        $this->user->delete();

        Session()->flash('sucess', 'Utilizador apagado com sucesso');

        if (auth()->user()->role === 'superadmin') {
           
             return redirect()->route('user.all');
        }

         return redirect()->route('/');
       
    }
    public function render()
    {
        return view('livewire.user.delete');
    }
}
