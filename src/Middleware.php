<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

use Closure;
use Illuminate\Http\Request;

class Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $consoleOverHttp = app()->make(ConsoleOverHttp::class);

        if ($consoleOverHttp->hasAuth() && !$consoleOverHttp->checkAuth()) {
            return abort(401);
        }

        if (!$consoleOverHttp->isInsecure()) {
            $this->checkToken($this->getToken($request));
        }

        return $next($request);
    }

    protected function getToken($request)
    {
        return $request->get('token');
    }

    protected function checkToken($token)
    {
        $configuredToken = config('console-over-http.token');

        if ($configuredToken === null) {
            return abort(401);
        }

        if (!hash_equals($configuredToken, $token)) {
            return abort(401);
        }
    }
}
