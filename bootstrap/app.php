<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Antes que nada: si la petición llega por www, se redirige al host
        // canónico sin llegar a renderizar nada.
        $middleware->prepend([
            \App\Http\Middleware\RedirectToCanonicalHost::class,
        ]);

        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);

        // La baja del newsletter la puede enviar el propio cliente de correo
        // (List-Unsubscribe-Post, RFC 8058) sin token CSRF. La protege la
        // firma de la URL (middleware `signed`).
        $middleware->validateCsrfTokens(except: [
            'newsletter/baja/*',
        ]);

        $middleware->alias([
            'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // La API pública se consume con curl y desde el CLI, que no envían
        // `Accept: application/json`: sin esto, un error de validación
        // respondería con una redirección HTML.
        $exceptions->shouldRenderJsonWhen(
            fn ($request) => $request->is('api/*') || $request->expectsJson()
        );
    })->create();
