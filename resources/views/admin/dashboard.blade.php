@extends('layouts')


@section('content')
<div class="w-full container mx-auto px-4 bg-slate-50  dark:bg-slate-950 text-slate-900 dark:text-slate-100">

<Header class="w-full p-6  rounded-lg shadow-md mt-6 mx-6 border-b-2 border-gray-300 dark:border-gray-700">

        <h1 class="text-2xl font-bold">Admin Dashboard</h1>

        <nav class="mt-4">

            <a href="{{ route('task.list') }}" class="text-blue-500 hover:underline mr-4">Lista de Tarefas</a>
            <a href="{{ route('task.create') }}" class="text-blue-500 hover:underline">Criar Nova Tarefa</a>


             <form method="POST" action="{{ route('logout') }}" class="inline align-middle ml-4">
                @csrf
                <button type="submit"
                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Logout
                </button>
             </form>

        </nav>

    </Header>


@error('email')
    <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        {{ $message }}
    </div>
@enderror



<p>Welcome to the Admin Dashboard.</p>

<a href="{{ route('register') }}" class="text-blue-500 hover:underline ">Criar usuario</a>

<a href="{{ route('task.create') }}" class="text-blue-500 hover:underline">Criar tarefa</a>

</div>

@endsection