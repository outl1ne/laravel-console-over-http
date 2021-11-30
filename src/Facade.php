<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'console-over-http';
    }

    /**
     * Register the endpoint
     *
     * @param  array  $options
     * @return void
     */
    public static function endpoint()
    {
        static::$app->make('router')->console();
    }
}
