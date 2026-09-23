<?php

namespace App\Console\Commands;

use App\Support\SearchConsoleOpportunities;
use Illuminate\Console\Command;
use InvalidArgumentException;

/**
 * Cruza una exportación de Search Console con el contenido del sitio y
 * devuelve qué hacer a continuación, ordenado por clics potenciales.
 *
 *   php artisan seo:gsc-opportunities storage/app/Consultas.csv
 *   php artisan seo:gsc-opportunities Consultas.csv --min-impressions=100 --limit=50 --output=oportunidades.csv
 *
 * El CSV sale de Search Console → Rendimiento → Resultados de búsqueda →
 * Exportar → CSV, pestaña «Consultas».
 */
class SearchConsoleOpportunitiesCommand extends Command
{
    protected $signature = 'seo:gsc-opportunities
        {file : Ruta al CSV de consultas exportado de Search Console}
        {--min-impressions=50 : Ignora las consultas con menos impresiones}
        {--limit=30 : Número de filas a mostrar}
        {--output= : Guarda el resultado completo en este CSV}';

    protected $description = 'Prioriza oportunidades SEO a partir de una exportación de Search Console';

    public function handle(): int
    {
        $path = $this->argument('file');

        if (! is_file($path) || ! is_readable($path)) {
            $this->error("No se puede leer {$path}.");

            return self::FAILURE;
        }

        try {
            $rows = SearchConsoleOpportunities::parse(file_get_contents($path));
        } catch (InvalidArgumentException $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $opportunities = SearchConsoleOpportunities::analyze($rows, (int) $this->option('min-impressions'));

        if ($opportunities === []) {
            $this->info('Sin oportunidades con esos umbrales. Prueba a bajar --min-impressions.');

            return self::SUCCESS;
        }

        $this->table(
            ['Consulta', 'Impr.', 'CTR', 'Pos.', 'Acción', 'Página', '+Clics'],
            collect($opportunities)
                ->take((int) $this->option('limit'))
                ->map(fn (array $o) => [
                    $o['query'],
                    number_format($o['impressions'], 0, ',', '.'),
                    number_format($o['ctr'] * 100, 1, ',', '.').' %',
                    number_format($o['position'], 1, ',', '.'),
                    $o['action'],
                    $o['page'] ? parse_url($o['page'], PHP_URL_PATH) : '—',
                    $o['potential_clicks'],
                ])
                ->all()
        );

        $byAction = collect($opportunities)->countBy('action');
        $this->newLine();

        foreach ($byAction as $action => $count) {
            $this->line("  {$action}: {$count}");
        }

        if ($output = $this->option('output')) {
            $handle = fopen($output, 'w');
            fputcsv($handle, array_keys($opportunities[0]));

            foreach ($opportunities as $row) {
                fputcsv($handle, $row);
            }

            fclose($handle);
            $this->info("Resultado completo guardado en {$output}.");
        }

        return self::SUCCESS;
    }
}
