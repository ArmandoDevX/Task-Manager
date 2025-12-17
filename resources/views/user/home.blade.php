@extends('layouts')

@section('content')
<div>

  <header class="flex w-full justify-between items-center p-6">
    
  <div>
    <h1 class="text-2xl">{{ Auth::user()->name }}!</h1> 
    <a href="{{ route('task.list') }}" class="text-blue-400">Ver Tarefas</a>
  </div>

  <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit"
          class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
          Logout
      </button>
  </form>
</header>



   @livewire('notification-handler')

</div>
@endsection