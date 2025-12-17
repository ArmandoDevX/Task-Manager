

<div class="max-w-lg mx-auto bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md mt-6">

<a href="{{route('user.all')}}" class="p-2 px-4 bg-green-800 rounded mb-2 text-blue-400 border-blue-300">Voltar</a>

<br>
<br>


    {{-- Título --}}
    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-slate-100">
        Permissões para: {{ $user->name }}
    </h3>

    {{-- Lista de permissões --}}
    <div class="space-y-3">
        @foreach($availablePermissions as $perm)
            <label class="flex items-center space-x-2">
                <input type="checkbox" 
                       wire:model="selectedPermissions" 
                       value="{{ $perm->id }}"
                       class="form-checkbox h-5 w-5 text-blue-600 dark:text-blue-400 rounded">
                <span class="text-slate-900 dark:text-slate-100">{{ $perm->name }}</span>
            </label>
        @endforeach
    </div>

    {{-- Botão salvar --}}
    <button wire:click="updatePermissions"
            class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-600 transition">
        Salvar Permissões
    </button>

    {{-- Mensagem de sucesso --}}
    @if (session()->has('success'))
        <div class="mt-4 p-2 bg-green-100 text-green-700 rounded-lg dark:bg-green-700 dark:text-green-100">
            {{ session('success') }}
        </div>
    @endif

</div>
