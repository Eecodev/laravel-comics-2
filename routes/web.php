<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
    return to_route('comics.index');
})->name('home');

// Route::get('/comics{id}', function ($id) {
//     $comics = config('db.comics');
//     $comic = $comics[$id];
//     return view('comics.show', compact('comic'));
// })->name('comics.show');

// Route::get('/comics', function () {
//     $comics = config('db.comics');
//     return view('comics.index', compact('comics'));
// })->name('comics.index');

Route::resource('comics', ComicController::class);
