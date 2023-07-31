<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;


Route::get('/', [ComicController::class, 'index'])->name('home');
