<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-white p-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-400">Ledger Entries</h1>

        <!-- Create Ledger Button -->
        <div class="mb-8 ">
            <a href="{{ route('ledger.create') }}" class="bg-blue-600 px-6 py-2 text-white rounded hover:bg-blue-700">
                Create Ledger Entry
            </a>
        </div>

        <!-- Datatable -->
        <div class="overflow-x-auto mt-6">
            <table id="ledgerTable" class="table-auto w-full border-collapse border border-gray-700">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border border-gray-700 px-6 py-4 text-left">Date</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Transaction Type</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Amount</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Description</th>
                        <th class="border border-gray-700 px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ledgers as $ledger)
                        <tr class="hover:bg-gray-800">
                            <td class="border border-gray-700 px-6 py-4">{{ $ledger->date }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $ledger->transaction_type }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $ledger->amount }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $ledger->description }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">
                                <a href="{{ route('ledger.edit', $ledger->id) }}" class="text-blue-400 hover:underline">Edit</a>
                                <form action="{{ route('ledger.destroy', $ledger->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this ledger entry?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($ledgers->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center py-4">No ledger entries found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
