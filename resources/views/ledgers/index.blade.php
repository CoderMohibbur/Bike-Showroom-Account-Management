<!-- resources/views/ledger/index.blade.php -->

<x-app-layout>
    <h1 class="text-3xl font-semibold mb-6 text-gray-800 dark:text-white">Ledger Entries</h1>

    <!-- Create Ledger Button -->
    <div class="mb-4">
        <a href="{{ route('ledger.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700">
            Create Ledger Entry
        </a>
    </div>

    <table class="min-w-full table-auto border-collapse text-gray-800 dark:text-white">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="border-b px-4 py-2 text-left">Date</th>
                <th class="border-b px-4 py-2 text-left">Transaction Type</th>
                <th class="border-b px-4 py-2 text-left">Amount</th>
                <th class="border-b px-4 py-2 text-left">Description</th>
                <th class="border-b px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800">
            @foreach ($ledgers as $ledger)
                <tr>
                    <td class="border-b px-4 py-2">{{ $ledger->date }}</td>
                    <td class="border-b px-4 py-2">{{ $ledger->transaction_type }}</td>
                    <td class="border-b px-4 py-2">{{ $ledger->amount }}</td>
                    <td class="border-b px-4 py-2">{{ $ledger->description }}</td>
                    <td class="border-b px-4 py-2">
                        <!-- Delete Form -->
                        <form action="{{ route('ledger.destroy', $ledger->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ledger entry?')">
                            @csrf
                            @method('DELETE') <!-- This specifies that this is a DELETE request -->
                            <button type="submit" class="text-red-500 hover:text-red-700 dark:text-red-300 dark:hover:text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
