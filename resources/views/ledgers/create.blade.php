<!-- resources/views/ledger/create.blade.php -->

<x-app-layout>
    <h1 class="text-3xl font-bold mb-6 text-white">Create Ledger Entry</h1>

    <div class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
        <form action="{{ route('ledger.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="date" class="block text-sm font-semibold text-gray-300">Date</label>
                <input type="date" name="date" id="date" class="mt-1 p-3 w-full bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="transaction_type" class="block text-sm font-semibold text-gray-300">Transaction Type</label>
                <input type="text" name="transaction_type" id="transaction_type" class="mt-1 p-3 w-full bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="amount" class="block text-sm font-semibold text-gray-300">Amount</label>
                <input type="number" name="amount" id="amount" class="mt-1 p-3 w-full bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-semibold text-gray-300">Description</label>
                <textarea name="description" id="description" class="mt-1 p-3 w-full bg-gray-700 text-white border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
        </form>
    </div>
</x-app-layout>
