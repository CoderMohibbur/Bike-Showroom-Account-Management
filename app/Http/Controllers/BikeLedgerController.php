<?php

// app/Http/Controllers/BikeLedgerController.php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\BikeLedger;
use Illuminate\Http\Request;

class BikeLedgerController extends Controller
{
    // Display a listing of the bike ledger entries
    public function index()
    {
        $bike_ledgers = BikeLedger::all();
        return view('bike_ledger.index', compact('bike_ledgers'));
    }

    // Show the form for creating a new bike ledger entry
    public function create()
    {
        return view('bike_ledger.create');
    }

    // Store a newly created bike ledger entry
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'transaction_type' => 'required|in:purchase,sale,maintenance',
            'amount' => 'required|numeric',
            'bike_model' => 'required|string|max:255',
        ]);

        BikeLedger::create($request->all());

        return redirect()->route('bike_ledger.index')->with('success', 'Entry added successfully');
    }

    // Show the form for editing an existing bike ledger entry
    public function edit(BikeLedger $bikeLedger)
    {
        return view('bike_ledger.edit', compact('bikeLedger'));
    }

    // Update an existing bike ledger entry
    public function update(Request $request, BikeLedger $bikeLedger)
    {
        $request->validate([
            'date' => 'required|date',
            'transaction_type' => 'required|in:purchase,sale,maintenance',
            'amount' => 'required|numeric',
            'bike_model' => 'required|string|max:255',
        ]);

        $bikeLedger->update($request->all());

        return redirect()->route('bike_ledger.index')->with('success', 'Entry updated successfully');
    }

    // Delete an existing bike ledger entry
    public function destroy(BikeLedger $bikeLedger)
    {
        $bikeLedger->delete();

        return redirect()->route('bike_ledger.index')->with('success', 'Entry deleted successfully');
    }
    public function show($id)
    {
        // Find the expense by id
        $expense = Expense::findOrFail($id);

        // Return a view or data
        return view('expenses.show', compact('expense'));
    }
}
