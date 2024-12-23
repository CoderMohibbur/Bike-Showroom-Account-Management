<!-- resources/views/expenses/show.blade.php -->

<x-app-layout>
    <h1 class="text-2xl font-semibold mb-4">Expense Details</h1>

    <div>
        <p><strong>Title:</strong> {{ $expense->title }}</p>
        <p><strong>Amount:</strong> ${{ $expense->amount }}</p>
        <p><strong>Date:</strong> {{ $expense->date }}</p>
        <p><strong>Description:</strong> {{ $expense->description }}</p>
    </div>

    <a href="{{ route('expenses.index') }}" class="text-blue-500">Back to Expenses List</a>
</x-app-layout>
