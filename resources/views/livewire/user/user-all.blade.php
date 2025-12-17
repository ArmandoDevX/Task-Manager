<div class="max-w-3xl mx-auto mt-6 space-y-4">


<a href="{{route('admin.dashboard')}}" class="p-2 px-4 dark:bg-slate-800 rounded-lg mb-2 text-blue-400">Voltar</a>

    <br>
    @foreach($users as $user)
        <div class="p-4 bg-white dark:bg-slate-800 rounded-lg shadow-sm flex flex-col md:flex-row md:justify-between md:items-center transition hover:shadow-md">
            
            <div>
                <h4 class="text-lg font-medium text-slate-900 dark:text-slate-100">
                    {{ $user->name }}
                </h4>
                <p class="text-sm text-slate-600 dark:text-slate-300">
                    {{ $user->email }}
                </p>
            </div>

            <a href="{{ route('admin.permissions', $user->id) }}"
               class="mt-2 md:mt-0 inline-block text-blue-500 hover:text-blue-600 hover:underline font-medium">
                Gerenciar Permissões
            </a>
        </div>
    @endforeach

</div>
