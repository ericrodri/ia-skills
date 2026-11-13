<?php

namespace App\Http\Controllers;

use App\Support\Guides;
use App\Support\Seo;
use App\Support\SiteData;
use App\Support\ThemePack;
use Illuminate\Contracts\View\View;

/**
 * Página imprimible de un pack temático (ver App\Support\ThemePack). Como la
 * de las profesiones, solo se llega con una URL firmada que se entrega al
 * confirmar el email: no se indexa ni se enlaza desde la web.
 */
class ThemePackController extends Controller
{
    public function show(string $tema): View
    {
        $theme = ThemePack::find($tema);

        abort_if($theme === null, 404);

        $title = ucfirst(ThemePack::title($theme));

        Seo::share([
            'title' => $title,
            'description' => "Pack descargable con el prompt completo de {$title}.",
            'robots' => 'noindex, nofollow',
        ]);

        return view('packs.theme', [
            'title' => $title,
            'theme' => $theme,
            'skills' => ThemePack::skills($theme),
            'guide' => Guides::find($theme['guide']),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
