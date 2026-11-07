<?php

namespace App\Http\Controllers;

use App\Support\Analytics;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

/**
 * Analítica propia (App\Support\Analytics): recogida de visitas y panel.
 */
class AnalyticsController extends Controller
{
    /** Periodos que ofrece el panel, en días. */
    private const RANGES = [7, 30, 90];

    /**
     * Aviso de página vista que manda el navegador con sendBeacon. Responde
     * siempre 204, se registre o no, para no dar pistas a quien lo pruebe.
     */
    public function collect(Request $request): Response
    {
        Analytics::record($request);

        return response()->noContent();
    }

    public function index(Request $request): InertiaResponse
    {
        $days = (int) $request->query('dias', 30);
        $days = in_array($days, self::RANGES, true) ? $days : 30;

        return Inertia::render('Admin/Analytics', [
            'report' => Analytics::report($days),
            'ranges' => self::RANGES,
        ]);
    }
}
