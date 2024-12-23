<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-white p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-400">Add Expense</h1>

        <form action="{{ route('expenses.store') }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="date" class="block text-sm font-semibold text-white">Date</label>
                <input type="date" name="date" id="date" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-semibold text-white">Category</label>
                <input type="text" name="category" id="category" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-sm font-semibold text-white">Amount</label>
                <input type="number" name="amount" id="amount" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-white">Description</label>
                <textarea name="description" id="description" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800"></textarea>
            </div>

            <button type="submit" class="bg-blue-600 px-4 py-2 text-white rounded hover:bg-blue-700">Save</button>
        </form>
    </div>
</x-app-layout>
