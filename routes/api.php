<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:api')->group(function () {
    Route::get('/v1/saved-skills', [ApiController::class, 'savedSkills']);
});
