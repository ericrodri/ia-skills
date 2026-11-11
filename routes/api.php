<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\McpConnectorController;
use App\Http\Controllers\OAuthServerController;
use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:api')->group(function () {
    Route::get('/v1/saved-skills', [ApiController::class, 'savedSkills']);

    // Catálogo público de solo lectura (lo consumen el CLI y el servidor MCP)
    Route::get('/v1/skills', [PublicApiController::class, 'skills'])->name('api.skills.index');
    Route::get('/v1/skills/{skill:slug}', [PublicApiController::class, 'skill'])->name('api.skills.show');
    Route::get('/v1/professions', [PublicApiController::class, 'professions'])->name('api.professions.index');
});

// Conector MCP remoto para Claude (Personalizar → Conectores). Sin
// credenciales, el catálogo público; con un token OAuth (cabecera Bearer) o
// con la clave de API del perfil en la ruta, también las skills propias,
// incluidas las privadas. Ver McpConnectorController.
Route::middleware('throttle:mcp')->group(function () {
    // Igual, pero exige iniciar sesión (responde 401 sin token): es la que
    // necesita Claude Code para ofrecer el inicio de sesión.
    Route::post('/mcp/cuenta', [McpConnectorController::class, 'account'])->name('api.mcp.account');
    Route::get('/mcp/cuenta', [McpConnectorController::class, 'stream']);
    Route::post('/mcp/{clave?}', [McpConnectorController::class, 'handle'])->name('api.mcp');
    Route::get('/mcp/{clave?}', [McpConnectorController::class, 'stream']);
});

// OAuth 2.1 del conector: registro dinámico, tokens y revocación. La
// pantalla de permiso y los metadatos /.well-known están en web.php.
Route::prefix('oauth')->name('oauth.')->group(function () {
    Route::post('/register', [OAuthServerController::class, 'register'])->middleware('throttle:oauth-register')->name('register');
    Route::post('/token', [OAuthServerController::class, 'token'])->middleware('throttle:oauth')->name('token');
    Route::post('/revoke', [OAuthServerController::class, 'revoke'])->middleware('throttle:oauth')->name('revoke');
});
