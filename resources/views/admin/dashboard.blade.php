@extends('layouts')

@section('content')
<div class="min-h-screen w-full bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100">

    {{-- Header --}}
    <header class="flex md:justify-between w-full p-6 rounded-lg shadow-md border-b-2 border-gray-300 dark:border-gray-700">
       <div>
        <h2>Admin: {{ Auth::user()->name}}</h2> <br>
         <h1 class="text-2xl font-bold">Admin Dashboard</h1>
       </div>

        {{-- Navegação --}}
        <nav class="mt-4  md:flex-row md:items-center  gap-4">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Logout
                </button>
            </form>
        </nav>

    </header>

    {{-- Mensagem de erro --}}
    @error('email')
        <div class="mb-6 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{ $message }}
        </div>
    @enderror

    {{-- Conteúdo principal --}}
    <div class="container mx-auto px-4 mt-6">
        <p class="text-lg font-medium mb-6">Welcome to the Admin Dashboard.</p>

        {{-- Cards do dashboard --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
        <a href="{{ route('task.list') }}">
            <div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold mb-2">Tarefas </h2>
                <p>Gerenciar Tarefas</p>
            </div>

        </a>
        
        <a href="{{ route('user.all') }}">
            <div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold mb-2">Usuários </h2>
                <p>Gerenciar usuários </p>
            </div>
        </a>

        </div>
    </div>

</div>
@endsection
