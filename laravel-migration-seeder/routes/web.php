<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return 'Pagina dei contatti';
});
