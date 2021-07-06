<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\mediaController;
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

Route::get('/', [MoviesController::class, 'getAllMovies']);
// Route::get('/', [NewsController::class, 'getAllNews']);
// Route::get('/', [GamesController::class, 'getAllGames']);