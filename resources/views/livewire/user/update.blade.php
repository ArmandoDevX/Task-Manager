<div>
    {{-- Be like water. --}}

    bem

    <div class="flex flex-col justify-center position-center items-center dark:bg-slate-800 text-white">

        <label for="">Nome:</label>

        <input type="text"
        wire:model="name"
        >
        <br>
        <label for="">Email</label>
        <input type="text"
        wire:model="email"
        >
        <br>
      <button wire:click="updateUser" class="bg-blue-600">atualizar</button>

    </div>
</div>
