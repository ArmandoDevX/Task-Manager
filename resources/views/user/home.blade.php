@extends('layouts')

@section('content')
<div>





    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

   <p>Bem-vindo, {{ Auth::user()->name }}!</p> 

   <a href="{{ route('task.list') }}">Ver Tarefas</a>

   @livewire('notification-handler')

</div>
@endsection