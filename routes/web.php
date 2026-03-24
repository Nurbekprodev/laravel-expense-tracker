<?php

use App\Models\Expense;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {

    return view('home');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Index
Route::get('/expenses', function () {
    $expenses = Expense::with('category')->latest()->simplePaginate(5);

    return view('expenses.index', ['expenses' => $expenses]);
});

// Create
Route::get('/expenses/create', function (){
    return view('expenses.create');
});

// Show
Route::get('/expenses/{id}', function ($id){
    $expense = Expense::find($id);

    return view('expenses.show', ['expense' => $expense]);
});

// Store
Route::post('/expenses', function (){
    request()->validate([
        'amount'        => ['min:3', 'required'],
        'description'   => ['min:3', 'required']
    ]);

    Expense::create([
        'amount'=> request('amount'),
        'description' => request('description'),
        'date' => request('date'),
        'category_id' => 1
    ]);

    return redirect('expenses');
});

// Edit
Route::get('/expenses/{id}/edit', function ($id){
    $expense = Expense::find($id);

    return view('expenses.edit', ['expense' => $expense]);
});

// Update
Route::patch('/expenses/{id}', function ($id){
    // validate
    request()->validate([
        'amount'        => ['min:3', 'required'],
        'description'   => ['min:3', 'required']
    ]);

    // authorize (on hold)

    $expense = Expense::findOrFail($id);

    // update
    $expense->update([
        'amount' => request('amount'),
        'description' => request('description'),
        'date' => request('date'),
      
    ]);

    // redirect
    return redirect('expenses');
});

// Destroy
Route::delete('/expenses/{id}', function ($id){
    $expense = Expense::findOrFail($id);
    // authorize (on hold)


    // delete the expense
    $expense->delete();

    //redirect 
    return redirect('expenses');
});