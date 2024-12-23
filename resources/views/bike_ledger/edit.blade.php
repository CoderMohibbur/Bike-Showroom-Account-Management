<!-- resources/views/bike_ledger/edit.blade.php -->

<x-app-layout>
    <h1 class="text-2xl font-semibold mb-4">Edit Bike Ledger Entry</h1>

    <form action="{{ route('bike_ledger.update', $bikeLedger->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold">Date</label>
            <input type="date" name="date" id="date" class="mt-1 p-2 w-full border border-gray-300 rounded" value="{{ $bikeLedger->date }}" required>
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-sm font-semibold">Transaction Type</label>
            <select name="transaction_type" id="transaction_type" class="mt-1 p-2 w-full border border-gray-300 rounded" required>
                <option value="purchase" {{ $bikeLedger->transaction_type == 'purchase' ? 'selected' : '' }}>Purchase</option>
                <option value="sale" {{ $bikeLedger->transaction_type == 'sale' ? 'selected' : '' }}>Sale</option>
                <option value="maintenance" {{ $bikeLedger->transaction_type == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm font-semibold">Amount</label>
            <input type="number" name="amount" id="amount" class="mt-1 p-2 w-full border border-gray-300 rounded" value="{{ $bikeLedger->amount }}" required>
        </div>

        <div class="mb-4">
            <label for="bike_model" class="block text-sm font-semibold">Bike Model</label>
            <input type="text" name="bike_model" id="bike_model" class="mt-1 p-2 w-full border border-gray-300 rounded" value="{{ $bikeLedger->bike_model }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 w-full border border-gray-300 rounded">{{ $bikeLedger->description }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</x-app-layout>
