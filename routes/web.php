<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OpenCodeController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedSkillController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'professions' => \App\Models\Profession::where('is_active', true)
            ->withCount(['skills as skills_count' => function ($query) {
                $query->where('status', 'published');
            }])
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug', 'icon']),
        'topSkills' => \App\Models\Skill::published()
            ->with(['profession:id,name,slug', 'author:id,name,username,is_verified_expert'])
            ->withCount('comments')
            ->orderByDesc('vote_score')
            ->limit(5)
            ->get(),
    ]);
})->name('home');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Professions
Route::get('/profesiones', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('/profesiones/{profession:slug}', [ProfessionController::class, 'show'])->name('professions.show');

// Skills
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/como-funciona', fn () => Inertia::render('HowItWorks'))->name('how-it-works');


// Auth-protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/skills/crear', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');

    Route::post('/skills/{skill:slug}/votar', VoteController::class)->name('skills.vote');
    Route::post('/skills/{skill:slug}/guardar', [SavedSkillController::class, 'toggle'])->name('skills.save');

    Route::post('/skills/{skill:slug}/opencode', [OpenCodeController::class, 'import'])->name('skills.opencode');

    Route::post('/skills/{skill:slug}/comentarios', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comentarios/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/api-token', [ProfileController::class, 'generateApiToken'])->name('profile.api-token.generate');
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
