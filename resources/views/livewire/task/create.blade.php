<div class="p-6 bg-white rounded-lg shadow-md">

    <form wire:submit.prevent="createTask" class="space-y-4">

        <div class="space-y-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Titulo</label>

            <input type="text" id="title" wire:model="title" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            @error('title') <span class="error"> {{ $message}} </span> @enderror

            <label for="description"class="block text-sm font-medium text-gray-700">Descrição</label>
            <textarea id="description" wire:model="description" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            @error('description') <span class="error"> {{ $messafe}} </span> @enderror  

            <label for="assigned_to" class="block text-sm font-medium text-gray-700">Atribuir a:</label>

            <select id="assigned_to" wire:model="assigned_to" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                <option value="">Selecione um usuário</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
            @error('assigned_to') <span class="error"> {{ $message }} </span> @enderror
    
        </div>
      
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Criar Tarefa</button>
    </form>
</div>
