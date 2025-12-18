<div class="flex flex-col max-w-md mx-auto mt-6 p-6 dark:bg-slate-900 dark:text-gray-400 justify-center content-center">
    {{-- The best athlete wants his opponent at his best. --}}



 <div class="">


     

    <h1 class="text-gray-900 bg-white dark:bg-gray-900 dark:text-gray-200">Perfil</h1>

    <div>

    <p>Nome: {{$user->name}}</p> <br>

    <p>Email: {{$user->email}}</p>

    
    <br><br>
    <a href="{{ route('user.edit', Auth::user()->id )}}" class="mt-4 border p-2 px-4 my-2 bg-green-600 text-gray-100 rounded hover:bg-green-400 mx-2">Editar</a>

    <a href="{{ route('user.delete', Auth::user()->id )}}" class=" mt-4 text-red-800 border rounded p-2 font-bold hover:text-red-500 transition"> Eliminar</a>

    </div>

</div>
  
</div>
