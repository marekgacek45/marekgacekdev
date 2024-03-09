<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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
Route::get('/admin', [PageController::class, 'admin']);

Route::prefix('admin/opinie')->name('admin.testimonial.')->group(function () {
    Route::get('/', [TestimonialController::class, 'index'])->name('index');
    Route::get('/dodaj', [TestimonialController::class, 'create'])->name('create');
    Route::post('/dodaj', [TestimonialController::class, 'store'])->name('store');
    Route::get('/edytuj/{testimonial}', [TestimonialController::class, 'edit'])->name('edit');
    Route::put('/edytuj/{testimonial}', [TestimonialController::class,'update'])->name('update');
    Route::delete('/usun/{testimonial}', [TestimonialController::class,'destroy'])->name('delete');
});

//  Route::prefix('admin/komentarze')->name('admin.comment.')->group(function () {
//         Route::get('/', [CommentController::class,'index'])->name('index');
//         Route::get('/dodaj', [CommentController::class,'create'])->name('create');
//         Route::post('/dodaj', [CommentController::class,'store'])->name('store');
//         Route::get('/edytuj/{comment}', [CommentController::class,'edit'])->name('edit');
//         Route::put('/edytuj/{comment}', [CommentController::class,'update'])->name('update');
//         Route::delete('/usun/{comment}', [CommentController::class,'destroy'])->name('delete');
//     });