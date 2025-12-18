<div>
    {{-- The best athlete wants his opponent at his best. --}}



 <div class="flex diretion-column justify-center justify-content dark:bg-scale-800">


    <div>

    <p>Nome: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>

 
    
    <a href="{{ route('user.edit', Auth::user()->id )}}" class="border p-2 my-4 bg-blue-600 rounded hover:bg-blue-400">Editar</a>
    <a href="{{ route('user.delete', Auth::user()->id )}}" class="border"> Eliminar</a>

    </div>

</div>
  
</div>
