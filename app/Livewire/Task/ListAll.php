<?php

namespace App\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ListAll extends Component
{

    public $tasks;
    public $users = [];

    public function mount() {
        $this->tasks = Task::with('assignedUser')->get();
        
    }

    public function updateStatus(Task $task, string $status)
{
    // Verifica se a tarefa pertence ao usuário logado
    if ($task->assigned_to !== auth()->id()) {
        session()->flash('error', 'Você não tem permissão para alterar esta tarefa.');
        return;
    }

    // Verifica se a tarefa expirou
    if ($task->isExpired()) {
        session()->flash('error', 'Essa tarefa expirou e não pode ser atualizada.');
        return;
    }

    // Atualiza o status
    $task->update([
        'status' => $status
    ]);

    session()->flash('success', 'Status da tarefa atualizado com sucesso.');
}



    public function render()
    {
        return view('livewire.task.list-all');
    
    }
}
