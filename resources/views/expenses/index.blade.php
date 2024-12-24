<x-app-layout>
    <div class="min-h-screen bg-gray-900 text-white p-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-400">All Expenses</h1>
        <a href="{{ route('expenses.create') }}" class="bg-blue-600 px-4 py-2 text-white rounded hover:bg-blue-700">Add Expense</a>

        <div class="overflow-x-auto mt-6">
            <table id="expensesTable" class="table-auto w-full border-collapse border border-gray-700">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="border border-gray-700 px-6 py-4 text-left">Date</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Category</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Amount</th>
                        <th class="border border-gray-700 px-6 py-4 text-left">Description</th>
                        <th class="border border-gray-700 px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($expenses as $expense)
                        <tr class="hover:bg-gray-800">
                            <td class="border border-gray-700 px-6 py-4">{{ $expense->date }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $expense->category }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $expense->amount }}</td>
                            <td class="border border-gray-700 px-6 py-4">{{ $expense->description }}</td>
                            <td class="border border-gray-700 px-6 py-4 text-center">
                                <a href="{{ route('expenses.edit', $expense->id) }}" class="text-blue-400 hover:underline">Edit</a>
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No expenses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>



</x-app-layout>
