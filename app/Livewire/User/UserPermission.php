<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Permission;

class UserPermission extends Component
{

    public User $user;
    public $availablePermissions = [];
    public $selectedPermissions = [];
 

    function mount($userId) {
        $this->user = User::findOrFail($userId);
        $this->availablePermissions = Permission::all();
        $this->selectedPermissions = $this->user->permissions->pluck('id')->toArray();
    }

    public function updatePermissions() {
        $this->user->permissions()->sync($this->selectedPermissions);
        session()->flash('success', 'Permissões atualizadas com sucesso.');


    }

    public function render()
    {
        return view('livewire.user.user-permission');
    }
}
