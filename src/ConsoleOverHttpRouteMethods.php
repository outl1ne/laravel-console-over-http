<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

class ConsoleOverHttpRouteMethods
{
    public function console()
    {
        return function ($endpoint = 'console') {
            $this->get($endpoint, '\OptimistDigital\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->middleware(Middleware::class)->name('console-over-http-get');
            $this->post($endpoint, '\OptimistDigital\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->middleware(Middleware::class)->name('console-over-http-post');
        };
    }
}
