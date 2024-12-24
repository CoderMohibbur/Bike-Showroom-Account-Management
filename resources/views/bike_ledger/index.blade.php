<!-- resources/views/bike_ledger/index.blade.php -->

<x-app-layout>
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-400">Bike Ledger</h1>
<div class="mb-8 text-right">

</div>
    <a href="{{ route('bike_ledger.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block dark:bg-blue-600 dark:hover:bg-blue-500 text-right ">Add New Entry</a>

    <div class="overflow-x-auto mt-6">
        <table id="bikeLedgerTable" class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-600">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Date</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Transaction Type</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Amount</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Bike Model</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Description</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-700 dark:text-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bike_ledgers as $bike_ledger)
                    <tr class="text-gray-900 dark:text-white">
                        <td class="border border-gray-300 px-4 py-2">{{ $bike_ledger->date }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ ucfirst($bike_ledger->transaction_type) }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $bike_ledger->amount }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $bike_ledger->bike_model }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $bike_ledger->description }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('bike_ledger.edit', $bike_ledger->id) }}" class="text-blue-500 dark:text-blue-400">Edit</a>
                            <form action="{{ route('bike_ledger.destroy', $bike_ledger->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 dark:text-red-400">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>


