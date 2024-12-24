<?php

// app/Http/Controllers/BankLedgerController.php

namespace App\Http\Controllers;

use App\Models\BankLedger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class LedgerController extends Controller
{
    // Show all bank ledger entries
    public function index()
    {
        $ledgers = BankLedger::all();
        return view('ledgers.index', compact('ledgers'));
    }

    // Show the form to create a new bank ledger entry
    public function create()
    {
        return view('ledgers.create');
    }

    // Store a new bank ledger entry
    public function store(Request $request)
    {
        Log::info('Storing BankLedger', $request->all());

        $request->validate([
            'date' => 'required|date',
            'transaction_type' => 'required|in:deposit,withdrawal',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        BankLedger::create($request->all());

        return redirect()->route('ledgers.index');
    }

    // Show the form to edit an existing bank ledger entry
    public function edit($id)
    {
        $ledgers = BankLedger::findOrFail($id);
        return view('ledgers.edit', compact('ledgers'));
    }

    // Update an existing bank ledger entry
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'transaction_type' => 'required|in:deposit,withdrawal',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $ledgers = BankLedger::findOrFail($id);
        $ledgers->update($request->all());

        return redirect()->route('ledgers.index');
    }

    // Delete a bank ledger entry
    public function destroy($id)
    {
        $ledgers = BankLedger::findOrFail($id);
        $ledgers->delete();

        return redirect()->route('ledgers.index');
    }
}

