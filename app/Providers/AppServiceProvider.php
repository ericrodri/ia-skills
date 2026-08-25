<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);

        $this->configureRateLimiting();
    }

    /**
     * Límites por acción. Todos van por usuario autenticado y caen a la IP
     * como red de seguridad (las rutas web ya exigen auth, pero así el
     * limitador sigue siendo correcto si alguna deja de exigirla).
     */
    private function configureRateLimiting(): void
    {
        RateLimiter::for('votes', fn (Request $request) => Limit::perMinute(60)
            ->by($request->user()?->id ?: $request->ip()));

        RateLimiter::for('comments', fn (Request $request) => Limit::perMinute(10)
            ->by($request->user()?->id ?: $request->ip()));

        // Publicar y editar skills es costoso de moderar: se limita por hora.
        RateLimiter::for('skill-writes', fn (Request $request) => Limit::perHour(20)
            ->by($request->user()?->id ?: $request->ip()));

        // La API es pública y sin sesión: se limita por token, o por IP si no lo hay.
        RateLimiter::for('api', fn (Request $request) => Limit::perMinute(60)
            ->by($request->query('api_key') ?? $request->bearerToken() ?? $request->ip()));
    }
}
