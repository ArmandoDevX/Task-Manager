<div class="p-6 bg-white rounded-lg shadow-md">

<!--  Voltar  -->

@auth
    
  @if(auth()->user()->role === 'superadmin')


     <a href="{{ route('admin.dashboard') }}" class="text-blue-500 hover:underline">Voltar a Dashboard</a>

  @else

  @if (session('error'))
    <div style="background-color: #fee2e2; color: #b91c1c; padding: 1rem; margin-bottom: 1rem; border-radius: 0.5rem;">
        {{ session('error') }}
    </div>
@endif


   <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Voltar ao Home</a>


  @endif

@endauth

    <h2 class="text-xl font-bold mb-4">Lista de Tarefas</h2>

    <a href="{{ route('task.create') }}" class="text-blue-500 hover:underline">Criar Nova Tarefa</a>
    @if($tasks->isEmpty())
        <p>Nenhuma tarefa encontrada.</p>
    @else
    <table class="w-full table-auto border-collapse border border-gray-200">
    <thead class="bg-gray-100">
        <tr class="border-b border-gray-200">
            <th class="p-2">Título</th>
           
            <th class="p-2">Responsável</th>
             <th class="p-2">Status</th>
            <th class="p-2">Prazo</th>
            <th class="p-2">Situação</th>
            <th class="p-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr class="border-b border-gray-200">
                <td class="p-2 px-4">{{ $task->title }}</td>
                <td class="p-2">{{ $task->assignedUser->name }}</td> <!-- aqui o nome do usuário -->
                <td>
        @if(auth()->id() === $task->assigned_to && !$task->isExpired())
            <select 
                wire:change="updateStatus({{ $task->id }}, $event.target.value)"
                class="border px-2 py-1 rounded"
            >
                <option value="PENDENTE" @if($task->status === 'PENDENTE') selected @endif>PENDENTE</option>
                <option value="EM_ANDAMENTO" @if($task->status === 'EM_ANDAMENTO') selected @endif>EM ANDAMENTO</option>
                <option value="FINALIZADO" @if($task->status === 'FINALIZADO') selected @endif>FINALIZADO</option>
            </select>
         @else
            <span>{{ $task->status }}</span>
          @endif
                </td>
                <td>{{ $task->deadline()->format('d/m/Y H:i') }}</td>
                <td>
                    @if($task->isExpired())
                        <span class="text-red-600 font-bold">Expirada</span>
                    @else
                        <span class="text-green-600 font-bold">Ativa</span>
                    @endif
                </td>
              
                <td class="p-2">
                    <a href="{{ route('task.edit', $task->id) }}" class="text-blue-500 hover:underline">Editar</a>
                    <a href="{{ route('task.delete', $task->id) }}" class="text-red-500 hover:underline ml-4">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    @endif
</div>
