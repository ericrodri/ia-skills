<?php

namespace App\Console\Commands;

use App\Support\IndexNow;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

/**
 * Avisa por IndexNow de las fichas y guías nuevas o cambiadas desde el último
 * envío (ver App\Support\IndexNow). Corre cada hora desde el scheduler y al
 * final de cada deploy, después de importar database/imports/.
 *
 *   php artisan indexnow:submit
 *   php artisan indexnow:submit --dry-run
 *   php artisan indexnow:submit --url=https://ia-skills.com/guias/cual-es-la-mejor-ia
 */
class IndexNowSubmitCommand extends Command
{
    protected $signature = 'indexnow:submit
        {--dry-run : Muestra las URL que se enviarían, sin enviarlas}
        {--url=* : URL que se envían además de las detectadas}';

    protected $description = 'Avisa a Bing y demás buscadores IndexNow de las páginas nuevas o cambiadas';

    public function handle(): int
    {
        $changes = IndexNow::changes(IndexNow::state(), now());
        $urls = array_values(array_unique([...$changes['urls'], ...$this->option('url')]));

        if ($this->option('dry-run')) {
            $this->info(count($urls).' URL pendientes:');
            foreach ($urls as $url) {
                $this->line("  {$url}");
            }

            return self::SUCCESS;
        }

        if (! IndexNow::enabled()) {
            $this->warn('IndexNow está desactivado (solo se activa en producción).');

            return self::SUCCESS;
        }

        if ($urls === []) {
            IndexNow::saveState($changes['state']);
            $this->info('Nada que enviar.');

            return self::SUCCESS;
        }

        $status = IndexNow::submit($urls);

        if (! IndexNow::ok($status)) {
            // Sin guardar el estado: el siguiente intento vuelve a probar con las mismas URL.
            Log::warning('IndexNow: el envío falló', ['status' => $status, 'urls' => count($urls)]);
            $this->error('IndexNow respondió '.($status ?? 'sin respuesta').'; se reintentará en la siguiente ejecución.');

            return self::FAILURE;
        }

        IndexNow::saveState($changes['state']);
        $this->info('Enviadas '.count($urls)." URL a IndexNow (HTTP {$status}).");

        return self::SUCCESS;
    }
}
