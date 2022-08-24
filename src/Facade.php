<?php

namespace Outl1ne\LaravelConsoleOverHttp;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(ConsoleOverHttp::class);

        return ConsoleOverHttp::class;
    }
}
