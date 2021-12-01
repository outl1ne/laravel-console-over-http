<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

class ConsoleOverHttp
{
    protected $insecure = false;

    public function endpoint()
    {
        app()->make('router')->console();

        return $this;
    }

    public function insecure()
    {
        $this->insecure = true;

        return $this;
    }

    public function isInsecure()
    {
        return $this->insecure;
    }
}
