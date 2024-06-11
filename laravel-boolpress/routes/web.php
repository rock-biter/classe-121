<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostController as PublicPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts',[PostController::class,'index']);
Route::resource('posts', PublicPostController::class)->only(['index', 'show']);

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        // url: admin/
        // name: admin.dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Registrare tutte le altre rotte protette
        // CRUD POSTS
        Route::resource('posts', PostController::class);
        Route::post('/posts/{post}/favorite', [PostController::class, 'toggleFavorite'])->name('posts.toggleFavorite');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
