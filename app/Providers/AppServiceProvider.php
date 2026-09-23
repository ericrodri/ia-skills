<?php

namespace App\Providers;

use App\Support\SiteData;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
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

        // La navegación de la cabecera se inyecta en el layout, no la pasa cada
        // controlador: así ninguna página Blade nueva puede quedarse sin ella.
        View::composer('layouts.site', function ($view) {
            $view->with('primaryNav', SiteData::primaryNav());
        });
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

        // Alta en la newsletter sin cuenta: cada envío manda un email de
        // confirmación, así que se limita por IP para que no sirva de cañón de spam.
        RateLimiter::for('newsletter', fn (Request $request) => [
            Limit::perMinute(3)->by('newsletter-min:'.$request->ip()),
            Limit::perDay(20)->by('newsletter-day:'.$request->ip()),
        ]);

        // La API es pública y sin sesión: se limita por token, o por IP si no lo hay.
        RateLimiter::for('api', fn (Request $request) => Limit::perMinute(60)
            ->by($request->query('api_key') ?? $request->bearerToken() ?? $request->ip()));
    }
}
