<!-- resources/views/bank_ledger/edit.blade.php -->

<x-app-layout>
    <h1 class="text-2xl font-semibold mb-4">Edit Bank Ledger Entry</h1>

    <form action="{{ route('bank_ledger.update', $bank_ledger->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This makes the form use PUT method for updating -->
        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold">Date</label>
            <input type="date" name="date" id="date" class="mt-1 p-2 border border-gray-300 rounded" value="{{ old('date', $bank_ledger->date) }}" required>
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-sm font-semibold">Transaction Type</label>
            <select name="transaction_type" id="transaction_type" class="mt-1 p-2 border border-gray-300 rounded" required>
                <option value="deposit" {{ $bank_ledger->transaction_type == 'deposit' ? 'selected' : '' }}>Deposit</option>
                <option value="withdrawal" {{ $bank_ledger->transaction_type == 'withdrawal' ? 'selected' : '' }}>Withdrawal</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm font-semibold">Amount</label>
            <input type="number" name="amount" id="amount" class="mt-1 p-2 border border-gray-300 rounded" value="{{ old('amount', $bank_ledger->amount) }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 border border-gray-300 rounded">{{ old('description', $bank_ledger->description) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>

</x-app-layout>
