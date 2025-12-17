@extends('layouts')


@section('content')
<div>
<header class="mb-6">
    <h1 class="text-xl font-bold mb-4">Admin Dashboard</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
            class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
            Logout
        </button>
    </form>

</header>

@error('email')
    <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        {{ $message }}
    </div>
@enderror

<h1 class="text-xl font-bold mb-4">Admin Dashboard</h1>

<p>Welcome to the Admin Dashboard.</p>

<a href="{{ route('register') }}" class="text-blue-500 hover:underline ">Criar usuario</a>

<a href="{{ route('task.create') }}" class="text-blue-500 hover:underline">Criar tarefa</a>

</div>

@endsection