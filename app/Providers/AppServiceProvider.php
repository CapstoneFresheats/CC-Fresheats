<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Ingredients;
// use App\Models\Ingredients\rate;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\Facades\DB;


// use PHPUnit\Metadata\Uses;

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
    // public function boot(): void
    // {
    //     //
    // }

    public function boot(Request $request): void
    {

        // // Menyusun query untuk mengambil data berdasarkan jenis ('type') dengan nilai terakhir
        // $query = Ingredients::select('types', DB::raw('MAX(id) as max_id'))
        //     ->groupBy('types');

        // $latestIngredients = Ingredients::whereIn('id', function ($subquery) use ($query) {
        //     $subquery->select('max_id')
        //         ->fromSub($query, 'latest_ids');
        // });

        // $ingredients = $latestIngredients->paginate(10);

        View::composer('dashboard', function ($view) {
            $ingredientscount = Ingredients::count();
            $view->with('ingredientscount', $ingredientscount);
        });

        View::composer('dashboard', function ($view) {
            $ingredientsrate = Ingredients::max('rate');
            $view->with('rate', $ingredientsrate);
        });

        View::composer('dashboard', function ($view) {
            $transaction = Transaction::count();
            $view->with('transactioncount', $transaction);
        });


        View::composer('dashboard', function ($view) {
            $userCount = User::count();
            $view->with('count', $userCount);
        });
        // $userCount = User::count();
    }
}
