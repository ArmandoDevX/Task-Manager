<div class="max-w-md mx-auto mt-6 p-6 bg-white dark:bg-slate-800 rounded-lg shadow-md">


<a href="{{route('task.list')}}" class="p-2 px-4 bg-green-800 rounded mb-2 text-blue-400 border-blue-300">Voltar</a>

<br>
<br>
    {{-- Título --}}
    <h3 class="text-xl font-semibold mb-6 text-slate-900 dark:text-slate-100">
        Atualizar Tarefa: {{ $task->title }}
    </h3>

    {{-- Campo Título --}}
    <div class="mb-4">
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">
            Título
        </label>
        <input type="text" 
               wire:model="title" 
               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-600 dark:bg-slate-700 dark:text-slate-100">
    </div>

    {{-- Campo Descrição --}}
    <div class="mb-4">
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">
            Descrição
        </label>
        <textarea wire:model="description" 
                  class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-600 dark:bg-slate-700 dark:text-slate-100 h-28 resize-none"></textarea>
    </div>

    {{-- Botão Salvar --}}
    <button wire:click="updateTask"
            class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 dark:focus:ring-green-600 transition">
        Salvar Tarefa
    </button>

    {{-- Mensagem de sucesso --}}
    @if (session()->has('success'))
        <div class="mt-4 p-2 bg-green-100 text-green-700 rounded-lg dark:bg-green-700 dark:text-green-100">
            {{ session('success') }}
        </div>
    @endif

</div>
