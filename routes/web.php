<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return Inertia::render('Home/Index');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/o_mnie', [PageController::class, 'about']);
Route::get('/uslugi', [PageController::class, 'services']);
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
Route::post('/kontakt', [FormController::class, 'contact'])->name('contact.form');
Route::get('/blog', [PageController::class, 'blog']);




Route::middleware(['admin'])->group(function () {

    //ADMIN DASHBOARD
    Route::get('/admin', [PageController::class, 'admin']);

    //TESTIMONIALS
    Route::prefix('admin/opinie')->name('admin.testimonial.')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('/dodaj', [TestimonialController::class, 'create'])->name('create');
        Route::post('/dodaj', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edytuj/{testimonial}', [TestimonialController::class, 'edit'])->name('edit');
        Route::put('/edytuj/{testimonial}', [TestimonialController::class, 'update'])->name('update');
        Route::delete('/usun/{testimonial}', [TestimonialController::class, 'destroy'])->name('delete');
    });

    //TOOLS
    Route::prefix('admin/narzedzia')->name('admin.tool.')->group(function () {
        Route::get('/', [ToolController::class, 'index'])->name('index');
        Route::get('/dodaj', [ToolController::class, 'create'])->name('create');
        Route::post('/dodaj', [ToolController::class, 'store'])->name('store');
        Route::get('/edytuj/{tool}', [ToolController::class, 'edit'])->name('edit');
        Route::put('/edytuj/{tool}', [ToolController::class, 'update'])->name('update');
        Route::delete('/usun/{tool}', [ToolController::class, 'destroy'])->name('delete');
    });

    //CATEGORY PROJECTS
    Route::prefix('admin/kategorie')->name('admin.category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/dodaj', [CategoryController::class, 'create'])->name('create');
        Route::post('/dodaj', [CategoryController::class, 'store'])->name('store');
        Route::get('/edytuj/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/edytuj/{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/usun/{category}', [CategoryController::class, 'destroy'])->name('delete');
    });

    //PROJECTS
    Route::prefix('admin/projekty')->name('admin.project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/dodaj', [ProjectController::class, 'create'])->name('create');
        Route::post('/dodaj', [ProjectController::class, 'store'])->name('store');
        Route::get('/edytuj/{project}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/edytuj/{project}', [ProjectController::class, 'update'])->name('update');
        Route::delete('/usun/{project}', [ProjectController::class, 'destroy'])->name('delete');
    });
    //POSTS
    Route::prefix('admin/posty')->name('admin.post.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/dodaj', [PostController::class, 'create'])->name('create');
        Route::post('/dodaj', [PostController::class, 'store'])->name('store');
        Route::get('/edytuj/{post}', [PostController::class, 'edit'])->name('edit');
        Route::get('/{post}', [PostController::class, 'show'])->name('show');
        // Route::put('/edytuj/{project}', [ProjectController::class, 'update'])->name('update');
        // Route::delete('/usun/{project}', [ProjectController::class, 'destroy'])->name('delete');
    });
});
