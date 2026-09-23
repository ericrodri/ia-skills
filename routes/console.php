<?php

use App\Models\NewsletterSubscriber;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Resumen semanal. Necesita el cron del scheduler en el servidor:
// * * * * * cd /var/www/ia-skills && php artisan schedule:run >> /dev/null 2>&1
Schedule::command('newsletter:weekly')
    ->weeklyOn(1, '8:00')
    ->timezone('Europe/Madrid')
    ->withoutOverlapping()
    ->onOneServer();

// Borra las suscripciones sin confirmar y las bajas a los 30 días, como
// promete la política de privacidad (NewsletterSubscriber::prunable()).
Schedule::command('model:prune', ['--model' => [NewsletterSubscriber::class]])
    ->daily()
    ->onOneServer();
