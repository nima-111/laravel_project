<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        $middleware->use([
            \Illuminate\Session\Middleware\StartSession::class,
            App\Http\Middleware\SetLocale::class,
        ]);

=======
        //
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
