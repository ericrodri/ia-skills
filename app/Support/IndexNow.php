<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * IndexNow: avisa a los buscadores que lo usan (Bing, Yandex, Seznam, Naver)
 * de las URL nuevas o cambiadas, sin esperar a que pasen por el sitemap.
 * Google no lo usa. Lo lanza `indexnow:submit` cada hora y en cada deploy.
 *
 * Qué cuenta como cambio:
 * - Fichas publicadas con updated_at posterior al último envío. Los
 *   contadores no mueven updated_at (Skill::bump()), así que una visita o un
 *   voto no generan avisos.
 * - Guías cuya fecha (published o updated) no coincide con la del último
 *   envío. Las guías solo tienen día, no hora: comparar contra la fecha
 *   guardada evita reenviarlas cada hora durante todo el día.
 *
 * El estado vive en un JSON en storage/ y no en la caché, porque el deploy
 * hace cache:clear y se perdería en cada despliegue.
 */
class IndexNow
{
    /** Máximo de URL por petición que admite el protocolo. */
    private const BATCH = 10000;

    public static function enabled(): bool
    {
        return (bool) config('services.indexnow.enabled');
    }

    public static function key(): string
    {
        return (string) config('services.indexnow.key');
    }

    public static function statePath(): string
    {
        return (string) config('services.indexnow.state', storage_path('app/indexnow.json'));
    }

    /**
     * @return array{last_run: ?string, guides: ?array<string, string>}
     */
    public static function state(): array
    {
        $path = self::statePath();
        $data = File::exists($path) ? json_decode((string) File::get($path), true) : null;

        return [
            'last_run' => is_array($data) ? ($data['last_run'] ?? null) : null,
            'guides' => is_array($data) && is_array($data['guides'] ?? null) ? $data['guides'] : null,
        ];
    }

    /**
     * @param  array{last_run: ?string, guides: ?array<string, string>}  $state
     */
    public static function saveState(array $state): void
    {
        File::ensureDirectoryExists(dirname(self::statePath()));
        File::put(self::statePath(), json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)."\n");
    }

    /**
     * URL que han cambiado desde el último envío y el estado que habrá que
     * guardar si el envío sale bien. La primera vez (sin estado) mira solo el
     * último día, para no mandar las 7.000 fichas de golpe.
     *
     * @param  array{last_run: ?string, guides: ?array<string, string>}  $state
     * @return array{urls: array<int, string>, state: array{last_run: string, guides: array<string, string>}}
     */
    public static function changes(array $state, Carbon $now): array
    {
        $since = $state['last_run'] ? Carbon::parse($state['last_run']) : $now->copy()->subDay();

        $urls = Skill::published()
            ->where('updated_at', '>=', $since)
            ->orderBy('updated_at')
            ->pluck('slug')
            ->map(fn (string $slug) => route('skills.show', ['skill' => $slug]))
            ->all();

        $guides = [];
        foreach (Guides::all() as $guide) {
            $date = max((string) ($guide['published'] ?? ''), (string) ($guide['updated'] ?? ''));
            $guides[$guide['slug']] = $date;

            $changed = $state['guides'] === null
                ? $date >= $since->toDateString()
                : ($state['guides'][$guide['slug']] ?? null) !== $date;

            if ($changed) {
                $urls[] = route('guides.show', ['slug' => $guide['slug']]);
            }
        }

        return [
            'urls' => array_values(array_unique($urls)),
            'state' => ['last_run' => $now->toIso8601String(), 'guides' => $guides],
        ];
    }

    /**
     * Envía las URL. Devuelve el código HTTP de la última petición (200 o 202
     * es éxito; 202 significa que aún están validando la clave) o null si no
     * hubo respuesta.
     *
     * @param  array<int, string>  $urls
     */
    public static function submit(array $urls): ?int
    {
        $host = (string) parse_url((string) config('app.url'), PHP_URL_HOST);
        $status = null;

        foreach (array_chunk($urls, self::BATCH) as $batch) {
            try {
                $status = Http::timeout(20)->acceptJson()->post((string) config('services.indexnow.endpoint'), [
                    'host' => $host,
                    'key' => self::key(),
                    'keyLocation' => rtrim((string) config('app.url'), '/').'/'.self::key().'.txt',
                    'urlList' => $batch,
                ])->status();
            } catch (Throwable) {
                return null;
            }

            if (! self::ok($status)) {
                return $status;
            }
        }

        return $status;
    }

    public static function ok(?int $status): bool
    {
        return $status === 200 || $status === 202;
    }
}
