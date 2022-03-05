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

Route::view('/', 'home');
Route::view('/characters', 'characters');

// rotta che rimanda a comics
Route::get('/comics', function () {
    $data = config('comics');
    return view('comics', compact('data'));
});
// /rotta che rimanda a comics -> http://127.0.0.1:8000/comics

Route::view('/movies', 'movies');
Route::view('/tv', 'tv');
Route::view('/games', 'games');
Route::view('/collectibles', 'collectibles');
Route::view('/videos', 'videos');
Route::view('/fans', 'fans');
Route::view('/news', 'news');
Route::view('/shop', 'shop');


// rotta con parametro dinamico {id} che rimanda a comics.details ->  http://127.0.0.1:8000/comics/4
// specifico una variabile come argomento della mia function -> $id
Route::get('/comics/{id}', function ($id){
    $data = config('comics');

    if(!is_numeric($id) || (int) $id >= count($data)){
        abort('404');
    }

    $comics = $data[$id];
    return view('comicsDetails', compact('comics'));

});
// /rotta che rimanda a comics.details ->  http://127.0.0.1:8000/comics/4

// se l'utente non inserisce un numero oppure se il numero inserito dall'utente supera il numero di prodotti nel mio array comics 
// -> blocco l'utente con errore abort -> abort lancerà errore con codice 404
// altrimenti ritorna il dettaglio del comics