<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use View;

/**
 * Class AppServiceProvider.
 */
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
        Paginator::useBootstrap();
        View::composer('frontend.layouts.header', function($view){
            $view -> with('services', Service::all());
        });
    }
}
