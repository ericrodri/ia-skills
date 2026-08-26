<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OgImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedSkillController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Sin closures en las rutas públicas: así `php artisan route:cache` funciona.
Route::get('/', HomeController::class)->name('home');

// Sitemap en formato índice + un fichero por tipo de contenido
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap-paginas.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
Route::get('/sitemap-profesiones.xml', [SitemapController::class, 'professions'])->name('sitemap.professions');
Route::get('/sitemap-guias.xml', [SitemapController::class, 'guides'])->name('sitemap.guides');
Route::get('/sitemap-skills-{page}.xml', [SitemapController::class, 'skills'])->whereNumber('page')->name('sitemap.skills');

// Feed RSS de las últimas skills
Route::get('/feed.xml', [FeedController::class, 'index'])->name('feed');

// OG Images (dynamic PNG per skill/profession)
Route::get('/og/default.png', [OgImageController::class, 'default'])->name('og.default');
Route::get('/og/skill/{skill:slug}', [OgImageController::class, 'skill'])->name('og.skill');
Route::get('/og/profession/{profession:slug}', [OgImageController::class, 'profession'])->name('og.profession');

// Professions
Route::get('/profesiones', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('/profesiones/{profession:slug}', [ProfessionController::class, 'show'])->name('professions.show');

// Guías (HTML renderizado en servidor, sin Inertia)
Route::get('/guias', [GuideController::class, 'index'])->name('guides.index');
Route::get('/guias/{slug}', [GuideController::class, 'show'])->name('guides.show');

// Skills
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/como-funciona', [PageController::class, 'howItWorks'])->name('how-it-works');


// Auth-protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/skills/crear', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills', [SkillController::class, 'store'])->middleware('throttle:skill-writes')->name('skills.store');

    Route::get('/skills/{skill:slug}/editar', [SkillController::class, 'edit'])->name('skills.edit');
    Route::patch('/skills/{skill:slug}', [SkillController::class, 'update'])->middleware('throttle:skill-writes')->name('skills.update');

    Route::post('/skills/{skill:slug}/votar', VoteController::class)->middleware('throttle:votes')->name('skills.vote');
    Route::post('/skills/{skill:slug}/guardar', [SavedSkillController::class, 'toggle'])->middleware('throttle:votes')->name('skills.save');

    Route::post('/skills/{skill:slug}/comentarios', [CommentController::class, 'store'])->middleware('throttle:comments')->name('comments.store');
    Route::delete('/comentarios/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/api-token', [ProfileController::class, 'generateApiToken'])->middleware('throttle:skill-writes')->name('profile.api-token.generate');
    Route::delete('/profile/api-token', [ProfileController::class, 'revokeApiToken'])->name('profile.api-token.revoke');
});

Route::get('/guardadas', [SavedSkillController::class, 'index'])->name('skills.saved');

Route::get('/skills/{skill:slug}', [SkillController::class, 'show'])->name('skills.show');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/skills', [AdminController::class, 'index'])->name('skills.index');
    Route::post('/skills/{skill}/aprobar', [AdminController::class, 'approve'])->name('skills.approve');
    Route::post('/skills/{skill}/rechazar', [AdminController::class, 'reject'])->name('skills.reject');
});

require __DIR__ . '/auth.php';
