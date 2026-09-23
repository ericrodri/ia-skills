<?php

/*
 * Datos del responsable del tratamiento para la política de privacidad
 * (/privacidad). Van en el .env de producción y no en el código porque el
 * repositorio es público: NIF y domicilio no deben quedar en su historial.
 */
return [
    // Nombre y apellidos o razón social del titular de la web
    'owner' => env('LEGAL_OWNER_NAME'),

    // NIF / CIF
    'tax_id' => env('LEGAL_OWNER_TAX_ID'),

    // Domicilio a efectos de notificaciones
    'address' => env('LEGAL_OWNER_ADDRESS'),

    // Email para ejercer derechos (acceso, supresión…)
    'email' => env('LEGAL_CONTACT_EMAIL', env('MAIL_FROM_ADDRESS')),

    // Proveedor del servidor (comprobado por la IP del dominio: Núremberg)
    'hosting' => env('LEGAL_HOSTING_PROVIDER', 'Hetzner Online GmbH, con servidores en Alemania (UE)'),

    // Fecha de la última revisión del texto (cámbiala al editarlo)
    'updated' => '2026-09-23',
];
