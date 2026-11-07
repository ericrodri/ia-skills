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
 */
class AffiliateController extends Controller
{
    public function go(Request $request, string $tool): RedirectResponse
    {
        $affiliate = Affiliates::find($tool);
        abort_unless($affiliate, 404);

        if (! Analytics::isBot((string) $request->userAgent()) && ! $request->user()?->is_admin) {
            $from = (string) $request->query('desde', '');

            DB::table('affiliate_clicks')->insert([
                'tool' => $tool,
                'day' => now()->toDateString(),
                'from' => str_starts_with($from, '/') ? Str::limit($from, 255, '') : null,
                'created_at' => now(),
            ]);
        }

        return redirect()->away($affiliate['url'])
            ->header('X-Robots-Tag', 'noindex, nofollow')
            ->header('Referrer-Policy', 'no-referrer-when-downgrade');
    }
}
