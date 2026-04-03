<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'amount' => fake()->numberBetween(1000, 50000),
            'description' => fake()->sentence(3),
            'date' => fake()->date(),
        ];
    }
}
