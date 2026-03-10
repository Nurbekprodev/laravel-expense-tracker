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
    $expenses = Expense::with('category')->simplePaginate(5);

    return view('expenses', ['expenses' => $expenses]);
});

Route::get('/expenses/{id}', function ($id){
    $expense = Expense::find($id);

    return view('expense', ['expense' => $expense]);
});