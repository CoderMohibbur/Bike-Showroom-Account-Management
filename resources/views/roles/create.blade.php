<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Role Name:*</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-2 text-gray-800 dark:text-gray-100 bg-white dark:bg-gray-700" placeholder="Role Name" required>
                    </div>

                    <h4 class="text-gray-700 dark:text-gray-300 font-bold mb-4">Permissions:</h4>

                    @foreach ($permissions as $category => $perms)
                        <div class="mb-6">
                            <div class="flex items-center mb-2">
                                <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mr-4">{{ ucfirst($category) }}</h5>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="check_all mr-2">
                                    <span class="text-sm text-gray-700 dark:text-gray-300">Select all</span>
                                </label>
                            </div>
                            <div class="grid grid-cols-3 gap-4 pl-6">
                                @foreach ($perms as $perm)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="permissions[]" value="{{ $perm->name }}" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300">{{ ucwords(str_replace('.', ' ', $perm->name)) }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <hr class="my-4 border-gray-300 dark:border-gray-600">
                    @endforeach

                    <div class="text-center mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
