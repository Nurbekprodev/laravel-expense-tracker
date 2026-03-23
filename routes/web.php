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
    $expenses = Expense::with('category')->latest()->simplePaginate(5);

    return view('expenses.index', ['expenses' => $expenses]);
});

Route::get('/expenses/create', function (){
    return view('expenses.create');
});

Route::get('/expenses/{id}', function ($id){
    $expense = Expense::find($id);

    return view('expenses.show', ['expense' => $expense]);
});

Route::post('/expenses', function (){
    
    Expense::create([
        'amount'=> request('amount'),
        'description' => request('description'),
        'date' => request('date'),
        'category_id' => 1
    ]);

    return redirect('expenses');
});

