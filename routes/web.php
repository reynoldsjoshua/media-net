<?php

use App\Http\Controllers\mediaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\DirectorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [mediaController::class, 'index']);

Route::get('/movies-by-director/{director}', [MoviesController::class, 'getMoviesByDirector']);

Route::delete('/movies-by-director/{director}', [MoviesController::class, 'deleteAMovie'])->name('deleteMovie');
