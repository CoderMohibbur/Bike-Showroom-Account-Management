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
Route::resource('ledger', LedgerController::class);



Route::resource('bank-ledger', BankLedgerController::class);


Route::resource('expenses', ExpenseController::class);

Route::resource('bike_ledger', BikeLedgerController::class);
