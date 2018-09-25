<?php

namespace App\Providers;

use App\Home;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //TODO::view share very good
        view()->composer('shop.includes.navbar', function($view) {
            $view->with('menu', Home::getMenu());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
