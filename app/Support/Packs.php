<?php

namespace App\Support;

/**
 * Los packs que se regalan a cambio del email, sean de una profesión
 * (ProfessionPack, source "pack:…") o de un tema (ThemePack, source "tema:…").
 * El alta, la confirmación y los emails solo necesitan esto.
 */
class Packs
{
    /**
     * Pack pedido según el `source` del formulario o del suscriptor.
     *
     * @return array{name: string, title: string, url: string}|null
     */
    public static function fromSource(?string $source): ?array
    {
        if ($theme = ThemePack::fromSource($source)) {
            return [
                'name' => $theme['name'],
                'title' => ThemePack::title($theme),
                'url' => ThemePack::url($theme),
            ];
        }

        if ($profession = ProfessionPack::professionFromSource($source)) {
            return [
                'name' => $profession->name,
                'title' => 'las '.ProfessionPack::SIZE." skills de IA más votadas para {$profession->name}",
                'url' => ProfessionPack::url($profession),
            ];
        }

        return null;
    }

    /**
     * El `source` que se guarda: limpio (sin orígenes inventados) si es un
     * pack que existe, o null si no lo es.
     */
    public static function normalizeSource(?string $source): ?string
    {
        if ($theme = ThemePack::fromSource($source)) {
            return ThemePack::source($theme['key'], ThemePack::originFromSource($source));
        }

        if ($profession = ProfessionPack::professionFromSource($source)) {
            return ProfessionPack::source($profession, ProfessionPack::originFromSource($source));
        }

        return null;
    }
}
