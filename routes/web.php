<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', [PageController::class, 'services']);

Route::get('/contact', function () {
    return view('contact');
});
