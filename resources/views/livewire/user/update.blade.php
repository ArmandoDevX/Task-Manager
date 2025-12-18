<div class="flex flex-col max-w-md mx-auto p-6 mt-6 justify-center content-center bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    {{-- Be like water. --}}

   <h2 class="text-center">Perfil</h2>

    <div class="">

        <label for="" class="bg-gray-100 text-gray-900 font-bold dark:bg-gray-900 dark:text-gray-100 mb-2">Nome: </label><br>

        <input type="text"
        wire:model="name"
        class="w-full px-3 py-2 mb-4 border border-gray-300 rounded-md"
        >
        <br>
        <label for="" class="bg-gray-100 text-gray-900 font-bold dark:bg-gray-900 dark:text-gray-100 mb-2">Email: </label> <br>

        <input type="text"
        wire:model="email"
        class="w-full px-3 py-2 mb-4  border border-gray-300 rounded-md">
            <br>
        <label for="" class="bg-gray-100 text-gray-900 font-bold dark:bg-gray-900 dark:text-gray-100 mb-2">Senha: </label> <br>

        <input type="password"
        wire:model="password"
        class="w-full px-3 py-2 mb-4  border border-gray-300 rounded-md">
        <br>

          <label for="" class="bg-gray-100 text-gray-900 font-bold dark:bg-gray-900 dark:text-gray-100 mb-2">Confirmar Senha: </label> <br>

        <input type="password"
        wire:model="password_confirmation"
        class="w-full px-3 py-2 mb-4  border border-gray-300 rounded-md ">
        <br>
      <button wire:click="updateUser" class="mt-4 mb-4 text-green-600 border rounded p-2 font-bold hover:text-green-400 transition">atualizar</button>

    </div>
</div>
