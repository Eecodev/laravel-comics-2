<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/comics{id}', function ($id) {
    $comics = config('db.comics');
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('comics.show');

// Route::get('/comics', function () {
//     $comics = config('db.comics');
//     return view('comics.index', compact('comics'));
// })->name('comics.index');

Route::resource('comics', ComicController::class);


