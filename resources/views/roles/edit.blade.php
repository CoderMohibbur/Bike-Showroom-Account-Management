<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Role Name</label>
                        <input type="text" id="name" name="name" value="{{ $role->name }}" class="w-full border rounded-lg p-2" required>
                    </div>

                    @foreach ($permissions as $category => $perms)
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold">{{ ucfirst($category) }}</h3>
                            <div class="grid grid-cols-3 gap-4">
                                @foreach ($perms as $perm)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="permissions[]" value="{{ $perm->name }}" {{ in_array($perm->name, $rolePermissions) ? 'checked' : '' }} class="mr-2">
                                        {{ ucwords(str_replace('.', ' ', $perm->name)) }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
