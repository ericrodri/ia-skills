<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // Entrar con Google (App\Http\Controllers\Auth\GoogleController). Sin las
    // dos claves, el botón no aparece y las rutas dan 404.
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI', '/auth/google/callback'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
     * Verificación de propiedad en las herramientas para webmasters. Se pega el
     * token del panel correspondiente en el .env y se renderiza en el <head>
     * (ver partials/seo.blade.php). Alternativa al registro TXT en el DNS,
     * útil cuando no se tiene acceso al panel del registrador.
     */
    'site_verification' => [
        'google' => env('GOOGLE_SITE_VERIFICATION'),
        'bing' => env('BING_SITE_VERIFICATION'),
    ],

    /*
     * IndexNow: avisa a Bing (y a Yandex, Seznam, Naver…) de las páginas
     * nuevas o cambiadas en cuanto se publican (App\Support\IndexNow). La
     * clave no es secreta: el protocolo exige publicarla en /{clave}.txt, que
     * está en public/. Si se cambia aquí, hay que renombrar ese fichero.
     */
    'indexnow' => [
        'key' => env('INDEXNOW_KEY', 'a3f5fc96d750576ba86b2af99cac63c2'),
        'endpoint' => 'https://api.indexnow.org/indexnow',
        'enabled' => (bool) env('INDEXNOW_ENABLED', env('APP_ENV') === 'production'),
    ],

];
