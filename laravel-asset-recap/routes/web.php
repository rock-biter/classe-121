<?php

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

    // recupera i dati dal file paste.php che abbiamo copiato dentro alla cartella config
    $paste = config('pasta');

    // dd($paste);

    return view('welcome', compact('paste'));
});
