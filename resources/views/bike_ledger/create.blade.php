<!-- resources/views/bike_ledger/create.blade.php -->

<x-app-layout>
    <h1 class="text-2xl font-semibold mb-4 text-gray-900 dark:text-white">Create Bike Ledger Entry</h1>

    <form action="{{ route('bike_ledger.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">Date</label>
            <input type="date" name="date" id="date" class="mt-1 p-2 w-full border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:text-white" required>
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">Transaction Type</label>
            <select name="transaction_type" id="transaction_type" class="mt-1 p-2 w-full border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:text-white" required>
                <option value="purchase">Purchase</option>
                <option value="sale">Sale</option>
                <option value="maintenance">Maintenance</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">Amount</label>
            <input type="number" name="amount" id="amount" class="mt-1 p-2 w-full border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:text-white" required>
        </div>

        <div class="mb-4">
            <label for="bike_model" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">Bike Model</label>
            <input type="text" name="bike_model" id="bike_model" class="mt-1 p-2 w-full border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:text-white" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 w-full border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:text-white"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded dark:bg-blue-600 dark:hover:bg-blue-500">Save</button>
    </form>
</x-app-layout>
