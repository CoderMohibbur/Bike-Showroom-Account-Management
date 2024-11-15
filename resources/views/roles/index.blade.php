<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <a href="{{ route('roles.create') }}" class="inline-block mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create New Role
                </a>

                <ul class="space-y-4">
                    @foreach($roles as $role)
                        <li class="flex items-center justify-between p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $role->name }}
                            </span>
                            <div class="flex space-x-2">
                                <a href="{{ route('roles.edit', $role->id) }}" class="text-blue-500 hover:underline">
                                    Edit
                                </a>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
