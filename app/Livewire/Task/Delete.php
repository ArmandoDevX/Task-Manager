<?php

namespace App\Livewire\Task;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;

class Delete extends Component
{

    public $task;

    public function mount($id) {

        $this->task = Task::with('assignedUser')->findOrFail($id);

        if(auth()->user()->role !== 'superadmin'){

            if(!auth()->user()->hasPermission('deletar_tarefa')){
             
                return redirect()->route('task.list')->with('error', 'Acesso Negado, Não tens Permissão para excluir tarefa.');
            }
        }

    }

    public function delete() {

        $this->task->delete();

        session()->flash('message', 'Tarefa apagada com sucesso');

       return redirect()->route('task.list');
    }
    public function render()
    {
        return view('livewire.task.delete');
    }
}
