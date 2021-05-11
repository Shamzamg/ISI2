<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MangaController;

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


Route::get('/', [WelcomeController::class, 'index']);
/*
Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('/vue1', function() {
    return view('vue1');
});

Route::get('{n}', function ($n) {
    return "Je suis à la page ".$n." !";
})->where('n', '[1-3]');

Route::get('/s', ['as' => 'home', function(){
    return "Je suis à la page d'accueil !";
}]);*/

Route::get('mangas',[MangaController::class, 'index']);