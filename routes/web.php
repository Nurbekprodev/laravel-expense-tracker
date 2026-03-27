<?php

use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::view('/dashboard', 'dashboard');

Route::resource('expenses', ExpenseController::class);


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
