<div class="p-6 bg-white rounded-lg shadow-md max-w-md mx-auto mt-10">
    
  <h1 class="mb-2 text-center text-lg bold">Você realmente quer excluír esta Tarefa</h2>
  
  <hr>
  <h2> Título:{{$task->title}}</h2>
  <p> Descrição: {{ $task->description }}</p>
  <p>Status: {{$task->status}}</p>
  <p>Atribuído a: {{ $task->assignedUser->name}}</p>


  <button wire:click="delete" class="text-red-500 border px-4 py-2 rounded justify-center hover:underline ml-4">
    Excluir
</button>

<a href="{{route('task.list')}}" class="text-blue-600 px-4 hover:underline ml-4">Cancelar</a>

</div>
