<div class="p-6 bg-white rounded-lg shadow-md">
    
<form wire:submit.prevent="register" class="space-y-4">

    <div class="space-y-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>

        <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border border-gray-300 rounded-md ">
        @error('name') <span class="error"> {{ $message }} </span> @enderror

        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
        <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border border-gray-300 rounded-md">
        @error('email') <span class="error"> {{ $message }} </span> @enderror  

        <label for="password" class="block text-sm font-medium text-gray-700">Senha:</label>
        <input type="password" id="password" wire:model="password" class="w-full px-3 py-2 border border-gray-300 rounded-md ">
        @error('password') <span class="error"> {{ $message }} </span> @enderror    

        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha:</label>
        <input type="password" id="password_confirmation" wire:model="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-md">
        @error('password_confirmation') <span class="error"> {{ $message }} </span> @enderror

        <label for="role" class="block text-sm font-medium text-gray-700">Tipo de Usuário:</label>
        <select id="role" wire:model="role" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            <option value="user">User</option>
            <option value="superadmin">Super Admin</option>
        </select>
        @error('role') <span class="error"> {{ $message }} </span> @enderror  
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Registrar</button>
</form>

</div>
