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

Route::get('/characters', function () {

    return view('characters');
})->name('characters.index');


Route::get('/', function () {
    
    $comics = config('comics');

    return view('comics')
    ->with('comics', $comics);
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    abort_if( !isset( $comics[$id]), 404 );

    $comic = $comics[$id];

    return view('detailComic')->with('comic',$comic);

    // if( isset( $comics[$id]) ){
    //     return 'Comic '.$id;
    // } else {
    //     abort(404);
    // }
})->where('id','[0-9]+')->name('comics.show');


Route::get('/movies', function () {

    return view('movies');
})->name('movies.index');


Route::get('/tv', function () {

    return view('tv');
})->name('tv.index');


Route::get('/games', function () {

    return view('games');
})->name('games.index');


Route::get('/collectibles', function () {

    return view('collectibles');
})->name('collectibles.index');


Route::get('/videos', function () {

    return view('videos');
})->name('videos.index');


Route::get('/fans', function () {

    return view('fans');
})->name('fans.index');


Route::get('/news', function () {

    return view('news');
})->name('news.index');


Route::get('/shop', function () {

    return view('shop');
})->name('shop.index');