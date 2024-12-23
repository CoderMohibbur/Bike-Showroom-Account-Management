<?php

// app/Http/Controllers/BankLedgerController.php

namespace App\Http\Controllers;

use App\Models\BankLedger;
use Illuminate\Http\Request;

class BankLedgerController extends Controller
{
    // Show all bank ledger entries
    public function index()
    {
        $bank_ledgers = BankLedger::all();
        return view('bank_ledger.index', compact('bank_ledgers'));
    }


    // Show the form to create a new bank ledger entry
    public function create()
    {
        return view('bank_ledger.create');
    }

    // Store a new bank ledger entry
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'transaction_type' => 'required|in:deposit,withdrawal',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        BankLedger::create($request->all());
        return redirect()->route('bank_ledger.index');
    }


    // Show the form to edit an existing bank ledger entry
    public function edit($id)
    {
        $bank_ledger = BankLedger::findOrFail($id);
        return view('bank_ledger.edit', compact('bank_ledger'));
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

        $bank_ledger = BankLedger::findOrFail($id);
        $bank_ledger->update($request->all());
        return redirect()->route('bank_ledger.index');
    }

    // Delete a bank ledger entry
    public function destroy($id)
    {
        $bank_ledger = BankLedger::findOrFail($id);
        $bank_ledger->delete();
        return redirect()->route('bank_ledger.index');
    }
}
