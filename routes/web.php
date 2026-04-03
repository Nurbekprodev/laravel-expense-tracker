<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredUserController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::view('/dashboard', 'dashboard');


Route::get('/expenses', [ExpenseController::class, 'index']);
Route::get('/expenses/create', [ExpenseController::class, 'create']);
Route::get('/expenses/{expense}', [ExpenseController::class, 'show']);
Route::post('/expenses', [ExpenseController::class, 'store'])
    ->middleware('auth');

Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'expense');

Route::patch('/expenses/{expense}', [ExpenseController::class, 'update']);
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy']);

// auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);



// Route::controller(ExpenseController::class)->group(function ()
// {
//     Route::get('/expenses', 'index');
//     Route::get('/expenses/create', 'create');
//     Route::get('/expenses/{expense}', 'show');
//     Route::post('/expenses', 'store');
//     Route::get('/expenses/{expense}/edit', 'edit');
//     Route::patch('/expenses/{expense}', 'update');
//     Route::delete('/expenses/{expense}', 'destroy');
// });
