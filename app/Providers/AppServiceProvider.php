<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PaginationPaginator::useBootstrap();
        
        Blade::if('admin', function () {
            return Auth::user()->role_id == 1 ||  Auth::user()->role_id == 2; 
        });
        // Blade::if('Webmaster', function () {
        //     return Auth::user()->role_id == 1 ||  Auth::user()->role_id == 2;
        // });


        Blade::if('redacteur', function () {
            return Auth::user()->role_id == 1 ||  Auth::user()->role_id == 2 || Auth::user()->role_id == 3;
        });
        // Blade::if('Membre', function () {
        //     return Auth::user()->role_id == 4;
        // });
    }
}
