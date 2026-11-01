<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Support\ProfessionPack;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;

/**
 * Página imprimible del pack de una profesión (ver App\Support\ProfessionPack).
 * Solo se llega con una URL firmada: el enlace se entrega al confirmar la
 * suscripción, así que la página no se indexa ni se enlaza desde la web.
 */
class ProfessionPackController extends Controller
{
    public function show(Profession $profession): View
    {
        abort_unless($profession->is_active, 404);

        Seo::share([
            'title' => "Las ".ProfessionPack::SIZE." mejores skills de IA para {$profession->name}",
            'description' => "Pack descargable con los prompts completos de las skills más votadas para {$profession->name}.",
            'robots' => 'noindex, nofollow',
        ]);

        return view('professions.pack', [
            'profession' => $profession,
            'skills' => ProfessionPack::skills($profession),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
