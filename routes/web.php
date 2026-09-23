<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LlmsTxtController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OgImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\SavedSkillController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillMarkdownController;
use App\Http\Controllers\SkillVersionController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

// Sin closures en las rutas públicas: así `php artisan route:cache` funciona.
Route::get('/', HomeController::class)->name('home');

// Sitemap en formato índice + un fichero por tipo de contenido
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap-paginas.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
Route::get('/sitemap-profesiones.xml', [SitemapController::class, 'professions'])->name('sitemap.professions');
Route::get('/sitemap-guias.xml', [SitemapController::class, 'guides'])->name('sitemap.guides');
Route::get('/sitemap-autores.xml', [SitemapController::class, 'authors'])->name('sitemap.authors');
Route::get('/sitemap-skills-{page}.xml', [SitemapController::class, 'skills'])->whereNumber('page')->name('sitemap.skills');

// Índice en Markdown para motores generativos (ChatGPT, Claude, Perplexity)
Route::get('/llms.txt', LlmsTxtController::class)->name('llms');

// Feed RSS de las últimas skills
Route::get('/feed.xml', [FeedController::class, 'index'])->name('feed');

// OG Images (dynamic PNG per skill/profession)
Route::get('/og/default.png', [OgImageController::class, 'default'])->name('og.default');
Route::get('/og/skill/{skill:slug}', [OgImageController::class, 'skill'])->name('og.skill');
Route::get('/og/profession/{profession:slug}', [OgImageController::class, 'profession'])->name('og.profession');

// Professions
Route::get('/profesiones', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('/profesiones/{profession:slug}', [ProfessionController::class, 'show'])->name('professions.show');
// Landings profesión × tarea (copy en resources/data/profession-tasks.json)
Route::get('/profesiones/{profession:slug}/{task}', [ProfessionController::class, 'task'])
    ->where('task', '[a-z0-9-]+')
    ->name('professions.task');

// Colecciones curadas (resources/data/collections.json)
Route::get('/colecciones', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/colecciones/{slug}', [CollectionController::class, 'show'])->where('slug', '[a-z0-9-]+')->name('collections.show');

// Ranking y perfiles públicos de autor
Route::get('/ranking', [RankingController::class, 'index'])->name('rankings.index');
Route::get('/autores/{user:username}', [AuthorController::class, 'show'])->name('authors.show');

// Resumen semanal: alta sin cuenta (doble opt-in) y bajas desde los enlaces firmados del email
Route::post('/newsletter/suscribir', [NewsletterController::class, 'subscribe'])
    ->middleware('throttle:newsletter')
    ->name('newsletter.subscribe');

Route::middleware('signed')->group(function () {
    Route::get('/newsletter/confirmar/{subscriber}', [NewsletterController::class, 'confirmSubscription'])->name('newsletter.confirm');
    Route::post('/newsletter/confirmar/{subscriber}', [NewsletterController::class, 'storeConfirmation'])->name('newsletter.confirm.store');

    Route::get('/newsletter/baja/{user}', [NewsletterController::class, 'confirm'])->name('newsletter.unsubscribe');
    Route::post('/newsletter/baja/{user}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe.confirm');

    Route::get('/newsletter/baja/s/{subscriber}', [NewsletterController::class, 'confirmSubscriberUnsubscribe'])->name('newsletter.subscriber.unsubscribe');
    Route::post('/newsletter/baja/s/{subscriber}', [NewsletterController::class, 'subscriberUnsubscribe'])->name('newsletter.subscriber.unsubscribe.confirm');
});

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

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/api-token', [ProfileController::class, 'generateApiToken'])->middleware('throttle:skill-writes')->name('profile.api-token.generate');
    Route::delete('/profile/api-token', [ProfileController::class, 'revokeApiToken'])->name('profile.api-token.revoke');
});

Route::get('/guardadas', [SavedSkillController::class, 'index'])->name('skills.saved');

Route::get('/skills/{skill:slug}', [SkillController::class, 'show'])->name('skills.show');
// La ficha como SKILL.md instalable (curl -o ~/.claude/skills/x/SKILL.md)
Route::get('/skills/{skill:slug}/skill.md', SkillMarkdownController::class)->name('skills.markdown');
// Contenido de una versión y la anterior, para el diff del historial
Route::get('/skills/{skill:slug}/versiones/{version}', [SkillVersionController::class, 'show'])
    ->whereNumber('version')
    ->name('skills.versions.show');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/skills', [AdminController::class, 'index'])->name('skills.index');
    Route::post('/skills/{skill}/aprobar', [AdminController::class, 'approve'])->name('skills.approve');
    Route::post('/skills/{skill}/rechazar', [AdminController::class, 'reject'])->name('skills.reject');
});

require __DIR__ . '/auth.php';
