<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SerpApiController;


Route::get('/', [SerpApiController::class, 'index'])->name('search');

Route::get('/results', [SerpApiController::class, 'results'])->name('results');


/*Route::get('/', function () {
    return view('welcome');
});*/
