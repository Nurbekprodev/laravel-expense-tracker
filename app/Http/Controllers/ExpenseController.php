<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('category')->latest()->simplePaginate(10);

        return view('expenses.index', ['expenses' => $expenses]);
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function show(Expense $expense)
    {
        return view('expenses.show', ['expense' => $expense]);
    }

    public function store()
    {
        request()->validate([
            'amount'        => ['min:3', 'required'],
            'description'   => ['min:3', 'required'],
            'date'          => ['min:8', 'required']
        ]);

        Expense::create([
            'amount'=> request('amount'),
            'description' => request('description'),
            'date' => request('date'),
            'category_id' => 1
        ]);

        return redirect('expenses');
    }

    // Edit
    public function edit(Expense $expense)
    {
      

        return view('expenses.edit', ['expense' => $expense]);
    }

    public function update(Expense $expense)
    {
        // validate
        request()->validate([
            'amount'        => ['min:3', 'required'],
            'description'   => ['min:3', 'required'],
            'date'          => ['min:8', 'required']
        ]);

        // authorize (on hold)

        // update
        $expense->update([
            'amount' => request('amount'),
            'description' => request('description'),
            'date' => request('date'),
        
        ]);

        // redirect
        return redirect('expenses');        
    }

    public function destroy(Expense $expense)
    {
        // authorize (on hold)


        // delete the expense
        $expense->delete();

        //redirect 
        return redirect('expenses');
    }
}
