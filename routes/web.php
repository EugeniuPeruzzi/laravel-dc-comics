<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;


Route::get('/', function () {
    return view('home') -> name('home');
});
