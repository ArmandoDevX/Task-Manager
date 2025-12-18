<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class ListById extends Component
{

    public $user;

    public function mount($id) {

        $this->user = User::find($id);


         if(!$this->user){
            abort(403, "Usuário não encontrado");
         }

    }

   
    public function render()
    {
        return view('livewire.user.list-by-id');
    }
}
