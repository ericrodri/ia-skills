<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\McpConnectorController;
use App\Http\Controllers\PublicApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:api')->group(function () {
    Route::get('/v1/saved-skills', [ApiController::class, 'savedSkills']);

    // Catálogo público de solo lectura (lo consumen el CLI y el servidor MCP)
    Route::get('/v1/skills', [PublicApiController::class, 'skills'])->name('api.skills.index');
    Route::get('/v1/skills/{skill:slug}', [PublicApiController::class, 'skill'])->name('api.skills.show');
    Route::get('/v1/professions', [PublicApiController::class, 'professions'])->name('api.professions.index');
});

// Conector MCP remoto para Claude (Ajustes → Conectores). Sin clave, el
// catálogo público; con la clave de API del perfil, también las skills
// propias, incluidas las privadas. Ver McpConnectorController.
Route::middleware('throttle:mcp')->group(function () {
    Route::post('/mcp/{clave?}', [McpConnectorController::class, 'handle'])->name('api.mcp');
    Route::get('/mcp/{clave?}', [McpConnectorController::class, 'stream']);
});
