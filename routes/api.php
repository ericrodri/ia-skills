<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/v1/saved-skills', [ApiController::class, 'savedSkills']);
