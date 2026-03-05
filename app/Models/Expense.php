<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Expense {
    public static function all(){
        return [
        [
            'id' => 1,
            'amount' => 12000,
            'category' => 'Food',
            'description' => 'Lunch at restaurant',
            'date' => '2026-03-01'
        ],
        [
            'id' => 2,
            'amount' => 4500,
            'category' => 'Coffee',
            'description' => 'Morning coffee',
            'date' => '2026-03-02'
        ],
        [
            'id' => 3,
            'amount' => 30000,
            'category' => 'Groceries',
            'description' => 'Supermarket shopping',
            'date' => '2026-03-03'
        ],
        [
            'id' => 4,
            'amount' => 15000,
            'category' => 'Transport',
            'description' => 'Bus card recharge',
            'date' => '2026-03-04'
        ],
        [
            'id' => 5,
            'amount' => 8000,
            'category' => 'Entertainment',
            'description' => 'Movie ticket',
            'date' => '2026-03-04'
        ],
        [
            'id' => 6,
            'amount' => 20000,
            'category' => 'Food',
            'description' => 'Dinner with friends',
            'date' => '2026-03-05'
        ]
    ];
    }

    public static function find($id){
        $expense = Arr::first(static::all(), fn($expense) => $expense['id'] == $id);

        if (! $expense){
            abort(404);
        }
        return $expense;
    }
};