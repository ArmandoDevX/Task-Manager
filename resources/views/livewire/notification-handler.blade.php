<div>
    @foreach (auth()->user()->unreadNotifications as $notification)
    <div class="alert alert-info py-5 px-4 mb-4 border my-6 rounded-lg">
       <span>Nova tarefa criada:</span> &nbsp; <b>Título:</b> {{ $notification->data['title'] }}
         &nbsp;&nbsp; <b>Descrição:</b> &nbsp;  {{ $notification->data['description'] }},
        <small>{{ $notification->created_at->diffForHumans() }}</small> <br>
        <button wire:click="markAsRead('{{ $notification->id }}')" class="m-2 p-2 inline-block border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">Marcar como lida</button>
    </div>
@endforeach
</div>
