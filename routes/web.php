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

// rotte che rimandano al controller HomeController (Home + Navbar)
Route::get('/', 'HomeController@index');
Route::get('/characters', 'HomeController@characters');
Route::get('/movies', 'HomeController@movies');
Route::get('/tv', 'HomeController@tv');
Route::get('/games', 'HomeController@games');
Route::get('/collectibles', 'HomeController@collectibles');
Route::get('/videos', 'HomeController@videos');
Route::get('/fans', 'HomeController@fans');
Route::get('/news', 'HomeController@news');
Route::get('/shop', 'HomeController@shop');
// /rotte che rimandano al controller HomeController


// rotta che rimanda al controller che gestisce comics ComicController
Route::get('/comics', 'ComicController@index');
// /rotta che rimanda al controller che gestisce comics -> http://127.0.0.1:8000/comics


// rotta con parametro dinamico {id} che rimanda a comics.details ->  http://127.0.0.1:8000/comics/4
// specifico una variabile come argomento della mia function -> $id
Route::get('/comics/{id}', function ($id){
    $data = config('comics');

    if(!is_numeric($id) || (int) $id >= count($data)){
        abort('404');
    }

    $comics = $data[$id];
    return view('comicsDetails', compact('comics'));
    
})->name('comics.details');
// /rotta che rimanda a comics.details ->  http://127.0.0.1:8000/comics/4

// se l'utente non inserisce un numero oppure se il numero inserito dall'utente supera il numero di prodotti nel mio array comics 
// -> blocco l'utente con errore abort -> abort lancerà errore con codice 404
// altrimenti ritorna il dettaglio del comics