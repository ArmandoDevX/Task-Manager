<div class="flex flex-col max-w-md mx-auto mt-6 p-6 bg-white text-gray-900 dark:bg-slate-900 justify-center content-center">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

        

    @auth
  
    <div>

    <h2 class="dark:text-gray-400 text-center">Confirmar Exclusão de Conta</h2>

    <br>
    @if(auth()->user()->role== 'superadmin')
        
        <h1 class="text-gray-900 dark:text-white mb-4">Queres realmente apagar os dados de 
      </h1>
        <h1 class="text-gray-500 dark:text-slate-300 mb-4"> Usuário: {{ $user->name }}?</h1>

        <br>
    
        @else
        <h1 class="text-gray-900 dark:text-white mb-4">Queres realmente apagar teus dados, {{ $user->name }}?</h1>

        <p class="text-gray-500 dark:text-slate-300 mb-4">Tenha em conta que se excluir, perderá todos os seus dados e Tarefas já realizadas</p>

    @endif

        <button wire:click="delete" class="text-red-700 border rounded px-2 py-1 font-bold hover:text-red-500 transition mx-2">Excluir</button>
        @if(auth()->user()->role== 'superadmin')
        
       <a href="{{ route('user.all')}}" class="text-green-600 border rounded px-2 p-2 font-bold hover:text-green-500 transition">Cancelar</a>
    
        @else
      <a href="{{ route('user.perfil', Auth::user()->id)}}" class="text-green-600 border rounded px-2 py-1 font-bold hover:text-green-400 transition">Cancelar</a>

    @endif
        </div>
    @endauth
</div>
