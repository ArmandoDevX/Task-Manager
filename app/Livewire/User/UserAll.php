<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UserAll extends Component
{
    public $users = [];

    function mount() {
        $this->users = User::where('role', 'user')->get();
    }

    public function render()
    {
        return view('livewire.user.user-all');
    }
}
