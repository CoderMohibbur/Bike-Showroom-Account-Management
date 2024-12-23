<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\BankLedgerController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\BikeLedgerController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('roles', RoleController::class);

Route::middleware(['auth', 'role:Superadmin'])->group(function () {
    // Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

Route::middleware(['auth', 'role:Superadmin'])->group(function () {
    Route::get('/user-roles', [UserRoleController::class, 'index'])->name('user-roles.index');
    Route::post('/user-roles/{user}/assign-role', [UserRoleController::class, 'assignRole'])->name('user-roles.assignRole');
});

Route::middleware(['auth', 'role:Superadmin'])->group(function () {
    Route::get('/role-permissions', [RolePermissionController::class, 'index'])->name('role-permissions.index');
    Route::post('/role-permissions/{role}/assign-permissions', [RolePermissionController::class, 'assignPermissions'])->name('role-permissions.assignPermissions');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('posts', PostController::class);
// Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);

// Ledger
Route::get('/ledger', [LedgerController::class, 'index'])->name('ledger.index');
Route::get('/ledger/create', [LedgerController::class, 'create'])->name(name: 'ledger.create');
Route::post('/ledger', [LedgerController::class, 'store'])->name('ledger.store');
Route::get('ledger/{id}', [LedgerController::class, 'show']);
Route::get('/ledger/{id}/edit', [LedgerController::class, 'edit'])->name('ledger.edit');
Route::put('ledger/{id}', [LedgerController::class, 'update']);
Route::delete('/ledger/{id}', [LedgerController::class, 'destroy'])->name('ledger.destroy');



//BankLedgerController

Route::prefix('bank-ledger')->name('bank_ledger.')->group(function () {
    Route::get('/', [BankLedgerController::class, 'index'])->name('index');
    Route::get('/create', [BankLedgerController::class, 'create'])->name('create');
    Route::post('/', [BankLedgerController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BankLedgerController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BankLedgerController::class, 'update'])->name('update');
    Route::delete('/{id}', [BankLedgerController::class, 'destroy'])->name('destroy');
});



Route::resource('expenses', ExpenseController::class);

Route::resource('bike_ledger', BikeLedgerController::class);
