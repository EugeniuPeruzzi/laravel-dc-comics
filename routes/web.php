<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;


Route::resource('/', ComicController::class);
