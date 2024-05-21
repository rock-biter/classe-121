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

    $email = 'pippo@gmail.com';
    $numeri = [1, 2, 3, 4, 5];

    // $data = compact('email', 'numeri');

    // dd($data);

    return view('welcome', compact('email', 'numeri'));
})->name('home');

Route::get('/contact', function () {

    $data = [
        'email' => 'info@blabla.com',
        'numeri' => [12, 26, 495],
    ];

    return view('contact', $data);
})->name('contact');

Route::get('/about-us', function () {
    return view('about.index');
})->name('about');

Route::get('/posts', function () {
    return 'Pagina del blog';
})->name('blog');
