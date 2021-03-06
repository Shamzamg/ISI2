<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\DessinateursController;
use App\Http\Controllers\ScenaristesController;

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

Route::get('/',[MangaController::class, 'index']);

Route::get('mangas',[MangaController::class, 'index']);

Route::get('dessinateurs',[DessinateursController::class, 'index']);

Route::get('scenaristes',[ScenaristesController::class, 'index']);