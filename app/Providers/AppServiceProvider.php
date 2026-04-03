<?php

namespace App\Providers;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        Paginator::useTailwind();

        // Gate::define('edit-expense', function (User $user, Expense $expense){
        //    return $expense->user->is($user);
        // });
    }
}
