<?php

namespace App\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\TaskUpdate as TaskUpdateNotification;

class Update extends Component
{

    public $taskid;
    public $title;
    public $description;
    public $status = 'PENDENTE';
    public $assigned_to;
    public $users = [];
    public ?Task $task = null;


     public function mount($id)
    {
        $this->users = User::all();
        $this->task = Task::findOrFail($id);

        $this->taskid = $this->task->id;
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->status = $this->task->status;
        $this->assigned_to = $this->task->assigned_to;

        if(auth()->user()->role !== 'superadmin'){

            if(!auth()->user()->hasPermission('editar_tarefa')){

                return redirect()->route('task.list')->with('error', 'Acesso Negado, Não tens Permissão para atualizar tarefa.');
            }
        }
    }
    public function updateTask() {
        $this->validate([
            'title'=> 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:PENDENTE,EM_ANDAMENTO,FINALIZADO',
            'assigned_to' => 'required|exists:users,id',
        ]);

         $this->task->update([
        'title'=> $this->title,
        'description' => $this->description,
        'status' => $this->status,
        'assigned_to' => $this->assigned_to,
    ]);

        /* foreach (User::where('id', $this->assigned_to)->get() as $user) {
            $user->notify(new TaskUpdateNotification($task));
        }
        */

        session()->flash('message', 'Tarefa atualizada com sucesso!');
        return redirect()->route('task.list');
    }

    public function render()
    {
        return view('livewire.task.update');
    }
}
