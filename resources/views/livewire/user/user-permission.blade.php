<div>
    <h3>Permissões para: {{ $user->name }}</h3>

    <div style="margin-top: 20px;">
        @foreach($availablePermissions as $perm)
            <div style="margin-bottom: 10px;">
                <label>
                    <input type="checkbox" 
                           wire:model="selectedPermissions" 
                           value="{{ $perm->id }}">
                    {{ $perm->name }}
                </label>
            </div>
        @endforeach
    </div>

    <button wire:click="updatePermissions" 
            style="background: blue; color: white; padding: 10px; margin-top: 10px;">
        Salvar Permissões
    </button>

    @if (session()->has('success'))
        <div style="color: green; margin-top: 10px;">{{ session('success') }}</div>
    @endif
</div>
