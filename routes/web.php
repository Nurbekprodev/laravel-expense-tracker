<?php

use App\Models\Expense;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/expenses', function () {
    return view('expenses', ['expenses' => Expense::all()]);
});

Route::get('/expenses/{id}', function ($id){
    $expense = Expense::find($id);

    return view('expense', ['expense' => $expense]);
});