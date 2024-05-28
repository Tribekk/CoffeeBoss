<?php

namespace App\Providers;

use App\Models\OrderList;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            if (auth()->user())
            $cart =  OrderList::where('user_id', '=', auth()->user()->id)->get();

            $totalItems = 0;
            if (isset($cart))
            $totalItems = count($cart);
            $view->with('totalItems', $totalItems);
        });
    }
}
