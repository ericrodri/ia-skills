<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;

/**
 * Páginas legales. Blade puro (layouts/site), como las guías: son texto
 * estático y deben leerse sin JavaScript.
 */
class LegalController extends Controller
{
    public function privacy(): View
    {
        Seo::share([
            'title' => 'Política de privacidad',
            'description' => 'Qué datos personales trata ia-skills, para qué, durante cuánto tiempo, con quién se comparten y cómo ejercer tus derechos.',
            'canonical' => route('legal.privacy'),
            // Se rastrea (hay enlaces que seguir) pero no compite en resultados.
            'robots' => 'noindex, follow',
        ]);

        return view('legal.privacy', [
            'legal' => config('legal'),
            'sessionMinutes' => (int) config('session.lifetime'),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
