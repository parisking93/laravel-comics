<?php

use Illuminate\Support\Facades\Route;

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
    $comics = config('comics');
    $data = ['db'=> $comics];
    return view('partials.comics', $data);
})->name('comics');

Route::get('/characters', function () {
    return view('partials.characters');
})->name('characters');

Route::get('/movie', function () {
    return view('partials.movie');
})->name('movie');

Route::get('/tv', function () {
    return view('partials.tv');
})->name('tv');

Route::get('/game', function () {
    return view('partials.game');
})->name('game');

Route::get('/collectibles', function () {
    return view('partials.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('partials.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('partials.fans');
})->name('fans');

Route::get('/news', function () {
    return view('partials.news');
})->name('news');

Route::get('/shop', function () {
    return view('partials.shop');
})->name('shop');



