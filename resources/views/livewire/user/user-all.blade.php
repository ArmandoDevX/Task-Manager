<div>

    @foreach($users as $user)
        <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc;">
            <h4>{{ $user->name }} {{ $user->email }}</h4>
            <a href="{{ route('admin.permissions', $user->id) }}" class="text-blue-500 hover:underline">Gerenciar Permissões</a>
        </div>
    @endforeach
</div>
