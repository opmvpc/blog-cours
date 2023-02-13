<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Utilisateurs
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col space-y-4">
            @foreach ($users as $user)
                <a href="{{ route('users.show', $user) }}"
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="flex flex-col p-6 text-gray-900 dark:text-gray-100">
                        <div>{{ $user->name }}</div>
                        <div>{{ $user->email }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{ $users->links() }}
</x-app-layout>
