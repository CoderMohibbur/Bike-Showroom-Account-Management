<!-- resources/views/ledger/edit.blade.php -->

<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Edit Ledger Entry</h1>

    <form action="{{ route('ledger.update', $ledger->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Specify the PUT method for updating data -->

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold">Date</label>
            <input type="date" name="date" id="date" value="{{ $ledger->date }}" class="mt-1 p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-sm font-semibold">Transaction Type</label>
            <input type="text" name="transaction_type" id="transaction_type" value="{{ $ledger->transaction_type }}" class="mt-1 p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm font-semibold">Amount</label>
            <input type="number" name="amount" id="amount" value="{{ $ledger->amount }}" class="mt-1 p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 border border-gray-300 rounded">{{ $ledger->description }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Changes</button>
    </form>
</x-app-layout>
