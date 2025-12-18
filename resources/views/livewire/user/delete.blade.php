<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    @auth

    @if(auth()->user()->role== 'superadmin')
        
        <h1>Queres reamente apagar os dados de: {{ $user->name }}?</h1>
    
        @else
        <h1>Queres reamente apagar teus dados, {{ $user->name }}?</h1>

    @endif

        <button wire:click="delete">Excluir</button>
    @endauth
</div>
