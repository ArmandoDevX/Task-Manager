@extends('layouts')

@section('content')
<div class="min-h-screen w-full bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100">

    {{-- Header --}}
    <header class="w-full p-6 rounded-lg shadow-md border-b-2 border-gray-300 dark:border-gray-700">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>

        {{-- Navegação --}}
        <nav class="mt-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <a href="{{ route('task.list') }}" class="text-blue-500 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Lista de Tarefas
                </a>
                <a href="{{ route('user.all') }}" class="text-blue-500 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Listar Usuários
                </a>
            </div>

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
            <div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold mb-2">Tarefas </h2>
                <p>tarefas para revisar.</p>
            </div>
            <div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold mb-2">Usuários </h2>
                <p>Atualmente </p>
            </div>
         
        </div>
    </div>

</div>
@endsection
