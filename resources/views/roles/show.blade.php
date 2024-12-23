<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <div class="text-center">
                    <h3 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 mb-4">
                        {{ $role->name }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Below is the list of permissions assigned to this role.
                    </p>
                </div>

                <div class="mt-6">
                    <h4 class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-4">
                        Permissions:
                    </h4>
                    @if($permissions->isEmpty())
                        <div class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <p class="text-gray-500 dark:text-gray-300">
                                No permissions assigned to this role.
                            </p>
                        </div>
                    @else
                        <ul class="list-disc pl-6 space-y-2">
                            @foreach ($permissions as $permission)
                                <li class="text-gray-800 dark:text-gray-200">
                                    {{ ucwords(str_replace('.', ' ', $permission->name)) }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="mt-8 flex justify-end space-x-4">
                    <a href="{{ route('roles.edit', $role->id) }}" 
                       class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-semibold text-sm rounded-md">
                        Edit Role
                    </a>
                    <a href="{{ route('roles.index') }}" 
                       class="inline-block px-6 py-2 bg-gray-300 hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-100 font-semibold text-sm rounded-md">
                        Back to Roles
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
