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

Route::view('/characters', 'characters');

// rotta che rimanda a comics
Route::get('/comics', function () {
    $data = config('comics');
    return view('comics', compact('data'));
});
// /rotta che rimanda a comics

Route::view('/movies', 'movies');
Route::view('/tv', 'tv');
Route::view('/games', 'games');
Route::view('/collectibles', 'collectibles');
Route::view('/videos', 'videos');
Route::view('/fans', 'fans');
Route::view('/news', 'news');
Route::view('/shop', 'shop');


