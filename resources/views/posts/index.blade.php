<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                @can('create post')
                    <a href="{{ route('posts.create') }}" class="inline-block mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create New Post
                    </a>
                @endcan

                <ul class="space-y-4">
                    @foreach($posts as $post)
                        <li class="flex items-center justify-between p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <a href="{{ route('posts.show', $post->id) }}" class="text-lg font-semibold text-gray-800 dark:text-gray-200 hover:underline">
                                {{ $post->title }}
                            </a>
                            <div class="flex space-x-2">
                                @can('edit post')
                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                @endcan
                                @can('delete post')
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>