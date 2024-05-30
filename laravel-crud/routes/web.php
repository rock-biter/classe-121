<?php

use App\Http\Controllers\PastaController;
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

    $comics = config('comics');
    // dd($comics);

    return view('welcome');
});


// PASTAS CRUD

// Route::resource('pastas', PastaController::class)->only(['index', 'destroy']);
Route::resource('pastas', PastaController::class);

// // index
// Route::get('/pastas', [PastaController::class, 'index'])->name('pastas.index');

// // create (deve stare prima della show)
// Route::get('/pastas/create', [PastaController::class, 'create'])->name('pastas.create');

// // show
// Route::get('/pastas/{pasta}', [PastaController::class, 'show'])->name('pastas.show');


// Route::post('/pastas', [PastaController::class, 'store'])->name('pastas.store');

// Route::get('/pastas/{pasta}/edit', [PastaController::class, 'edit'])->name('pastas.edit');

// Route::put('/pastas/{pasta}', [PastaController::class, 'update'])->name('pastas.update');

// Route::delete('/pastas/{pasta}', [PastaController::class, 'destroy'])->name('pastas.destroy');
