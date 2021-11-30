<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

use Illuminate\Support\Facades\Route;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new ConsoleOverHttpRouteMethods);
    }
}
