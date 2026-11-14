<?php

namespace App\Http\Controllers;

use App\Support\Affiliates;
use App\Support\Analytics;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * /ir/{tool}: cuenta el clic y redirige al enlace de afiliado.
 * No se indexa (X-Robots-Tag y robots.txt) ni cuenta bots ni admins.
 *
 * Solo cuenta si el enlace lleva ?pulsado=1, que añade el JavaScript del
 * recuadro al pulsarlo. El 14-11-2026 se comprobó que todos los clics
 * contados hasta entonces eran robots que seguían el href a pelo, con un
 * user-agent de Chrome normal: iban directos a /ir/ sin haber cargado la
 * guía. Sin la marca se redirige igual, pero no se cuenta.
 */
class AffiliateController extends Controller
{
    public function go(Request $request, string $tool): RedirectResponse
    {
        $affiliate = Affiliates::find($tool);
        abort_unless($affiliate, 404);

        $from = (string) $request->query('desde', '');
        $from = str_starts_with($from, '/') ? Str::limit($from, 255, '') : null;

        $pressed = $request->query(Affiliates::PRESSED) === '1';

        if ($pressed && ! Analytics::isBot((string) $request->userAgent()) && ! $request->user()?->is_admin) {
            DB::table('affiliate_clicks')->insert([
                'tool' => $tool,
                'day' => now()->toDateString(),
                'from' => $from,
                'created_at' => now(),
            ]);
        }

        return redirect()->away(Affiliates::urlFor($affiliate, $from))
            ->header('X-Robots-Tag', 'noindex, nofollow')
            ->header('Referrer-Policy', 'no-referrer-when-downgrade');
    }
}
