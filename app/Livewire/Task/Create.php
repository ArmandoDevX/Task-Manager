<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Livewire\Component;

class Create extends Component
{


    public $title;
    public $description;
    public $status = 'PENDENTE';
    public $assigned_to;
    public $created_by;
    public $users = [];


    public function mount() {
        $this->users = User::all();
        $this->created_by = Auth::id();
    }

    public function createTask() {
        $this->validate([
            'title'=> 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:PENDENTE, EM_ANDAMENTO, FINALIZADO',
            'assigned_to' => 'required|exists:users,id',
            'created_by' => 'required|exists:users,id',
        ]);

        Task::create([
            'title'=> $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'assigned_to' => $this->assigned_to,
            'created_by' => $this->created_by,
        ]);
    
        return redirect()->route('task.list');

    }

    public function render()
    {
        return view('livewire.task.create');
    }
}
