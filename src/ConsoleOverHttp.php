<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

class ConsoleOverHttp
{
    protected $insecure = false;
    protected $authFunction = null;

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

    public function auth($func)
    {
        $this->authFunction = $func;

        return $this;
    }

    public function hasAuth()
    {
        return $this->authFunction !== null;
    }

    public function checkAuth()
    {
        $func = $this->authFunction;
        return $func();
    }
}
