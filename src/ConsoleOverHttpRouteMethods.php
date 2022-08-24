<?php

namespace Outl1ne\LaravelConsoleOverHttp;

class ConsoleOverHttpRouteMethods
{
    public function console()
    {
        return function ($endpoint = 'console') {
            $this->get($endpoint, '\Outl1ne\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->middleware(Middleware::class)->name('console-over-http-get');
            $this->post($endpoint, '\Outl1ne\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->middleware(Middleware::class)->name('console-over-http-post');
        };
    }
}
