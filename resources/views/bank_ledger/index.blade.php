<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-white p-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-400">All Ledger</h1>

        <div class="mb-4">
            <a href="{{ route('bank-ledger.create') }}" class="bg-blue-600 px-4 py-2 text-white rounded hover:bg-blue-700">
                Add New Entry
            </a>
        </div>

        <div class="overflow-x-auto mt-6">
            <table id="ledgerTable" class="table-auto w-full border-collapse border border-gray-700">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border border-gray-700 dark:border-gray-700 px-6 py-4">Date</th>
                        <th class="border border-gray-700 dark:border-gray-700 px-6 py-4">Transaction Type</th>
                        <th class="border border-gray-700 dark:border-gray-700 px-6 py-4">Amount</th>
                        <th class="border border-gray-700 dark:border-gray-700 px-6 py-4">Description</th>
                        <th class="border border-gray-700 dark:border-gray-700 px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bank_ledgers as $bank_ledger)
                        <tr class="hover:bg-gray-800">
                            <td class="border border-gray-700 px-6 py-4 text-center">{{ $bank_ledger->date }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">{{ ucfirst($bank_ledger->transaction_type) }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">{{ $bank_ledger->amount }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">{{ $bank_ledger->description }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">
                                <a href="{{ route('bank-ledger.edit', $bank_ledger->id) }}" class="text-blue-500 dark:text-blue-300">Edit</a>
                                <form action="{{ route('bank-ledger.destroy', $bank_ledger->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 dark:text-red-300">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    
        $(document).ready(function() {
            $('#ledgerTable').DataTable();
        });

</x-app-layout>
