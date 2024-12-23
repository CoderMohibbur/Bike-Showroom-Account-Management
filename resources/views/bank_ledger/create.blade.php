<x-app-layout>
    <h1 class="text-2xl font-semibold mb-4 text-white">Create Bank Ledger Entry</h1>

    <form action="{{ route('bank_ledger.store') }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold text-white">Date</label>
            <input type="date" name="date" id="date" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-sm font-semibold text-white">Transaction Type</label>
            <select name="transaction_type" id="transaction_type" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
                <option value="deposit" class="text-gray-800">Deposit</option>
                <option value="withdrawal" class="text-gray-800">Withdrawal</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm font-semibold text-white">Amount</label>
            <input type="number" name="amount" id="amount" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold text-white">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 w-full border border-gray-600 rounded text-gray-800"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
    </form>
</x-app-layout>
