<x-app-layout>
    <div class="dark:bg-gray-900 dark:text-white p-6">
        <h1 class="text-2xl font-semibold mb-4">Bank Ledger</h1>

        <div class="mb-4">
            <a href="{{ route('bank_ledger.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Add New Entry
            </a>
        </div>

        <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-700">
            <thead>
                <tr>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Date</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Transaction Type</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Amount</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Description</th>
                    <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bank_ledgers as $bank_ledger)
                    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-gray-800 dark:even:bg-gray-700">
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $bank_ledger->date }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ ucfirst($bank_ledger->transaction_type) }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $bank_ledger->amount }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $bank_ledger->description }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                            <a href="{{ route('bank_ledger.edit', $bank_ledger->id) }}" class="text-blue-500 dark:text-blue-300">Edit</a>
                            <form action="{{ route('bank_ledger.destroy', $bank_ledger->id) }}" method="POST" class="inline">
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
</x-app-layout>
