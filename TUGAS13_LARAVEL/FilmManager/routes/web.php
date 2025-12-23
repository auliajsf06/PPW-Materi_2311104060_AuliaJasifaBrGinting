<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return redirect()->route('films.index');
});

Route::resource('films', FilmController::class);

