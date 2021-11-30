<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

class ConsoleOverHttpRouteMethods
{
    public function console()
    {
        return function ($endpoint = 'console') {
            $this->get($endpoint, '\OptimistDigital\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->name('console');
            $this->post($endpoint, '\OptimistDigital\LaravelConsoleOverHttp\ConsoleOverHttpController@console')->name('console');
        };
    }
}
