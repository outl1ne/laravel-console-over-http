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
        $this->mergeConfigFrom(__DIR__ . '/../config/console-over-http.php', 'console-over-http');

        $this->app->singleton(ConsoleOverHttp::class, function () {
            return new ConsoleOverHttp;
        });
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
