# Laravel Console over HTTP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/optimistdigital/laravel-console-over-http.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/laravel-healthz)
[![Total Downloads](https://img.shields.io/packagist/dt/optimistdigital/laravel-console-over-http.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/laravel-healthz)

Run console commands over HTTP connection for Laravel](https://laravel.com) applications.

Creates a route with a path `/console` that runs the command from HTTP parameters in a console.

## Usage

In `routes/web.php` add a line:

```
ConsoleOverHttp::endpoint();
```

And configure an environment variable `CONSOLE_OVER_HTTP_TOKEN` to secure the endpoint.

### Example - insecure usage

```
ConsoleOverHttp::endpoint()->insecure();
```

Or set the environment variable `CONSOLE_OVER_HTTP_INSECURE=true`.

### Example - custom authentication logic

```
ConsoleOverHttp::endpoint()->auth(function () {
    return \Auth::check();
});
```

## Installation

Install the package in a Laravel project via Composer:

```
composer require optimistdigital/laravel-console-over-http
```

## Credits

- [Allan Tatter](https://github.com/allantatter)

## License

Laravel Console over HTTP is open-sourced software licensed under the [MIT license](LICENSE.md).
