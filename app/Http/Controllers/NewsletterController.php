<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

/**
 * Baja del resumen semanal desde el enlace firmado del email.
 *
 * GET muestra una confirmación y POST da la baja. No se hace en el GET porque
 * los escáneres de enlaces de Outlook y compañía abren cada URL del email y
 * darían de baja a gente que no lo ha pedido. El POST también es el que usan
 * Gmail y Yahoo para la baja con un clic (List-Unsubscribe-Post), por eso
 * está exento de CSRF: lo protege la firma de la URL.
 */
class NewsletterController extends Controller
{
    public function confirm(User $user): View
    {
        return $this->page($user, done: false);
    }

    public function unsubscribe(User $user): View|Response
    {
        $user->forceFill(['newsletter_opt_in' => false])->save();

        return $this->page($user, done: true);
    }

    private function page(User $user, bool $done): View
    {
        Seo::share([
            'title' => 'Baja del resumen semanal',
            'description' => 'Gestiona tu suscripción al resumen semanal de ia-skills.',
            'robots' => 'noindex, nofollow',
        ]);

        return view('newsletter.unsubscribe', [
            'user' => $user,
            'done' => $done,
            'action' => request()->fullUrl(),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
