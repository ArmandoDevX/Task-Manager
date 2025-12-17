<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\TaskCreate as TaskCreateNotification;

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

    if (auth()->user()->role !== 'superadmin') {
    // Se não é admin, verificamos se falta a permissão
    if (!auth()->user()->hasPermission('criar_tarefa')) {
        return redirect()->route('task.list')->with('error', 'Acesso negado, Não tens Permissão para criar nova tarefa.');
    }
}
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

        /* foreach (User::where('id', $this->assigned_to)->get() as $user) {
            $user->notify(new TaskCreateNotification(
                Task::where('title', $this->title)->first()
            ));
        }

*/
        foreach (User::all() as $user) {
            $user->notify(new TaskCreateNotification(
                Task::where('title', $this->title)->first()
            )); 
        }

        
            session()->flash('success', 'Tarefa criada com sucesso.');
    
        return redirect()->route('task.list');

    }

 

    public function render()
    {
        return view('livewire.task.create');
    }
}
