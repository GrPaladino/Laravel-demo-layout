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
  return view('home');
})->name('home');

Route::get('/characters', function () {
  $comics = config('comics');
  return view('partials.characters', compact('comics'));
})->name('characters');

Route::get('/comics', function () {
  $comics = config('comics');
  return view('partials.comics', compact('comics'));
})->name('comics');

Route::get('/movies', function () {
  $comics = config('comics');
  return view('partials.movies', compact('comics'));
})->name('movies');

Route::get('/tv', function () {
  $comics = config('comics');
  return view('partials.tv', compact('comics'));
})->name('tv');

Route::get('/games', function () {
  $comics = config('comics');
  return view('partials.games', compact('comics'));
})->name('games');

Route::get('/collectibles', function () {
  $comics = config('comics');
  return view('partials.collectibles', compact('comics'));
})->name('collectibles');

Route::get('/videos', function () {
  $comics = config('comics');
  return view('partials.videos', compact('comics'));
})->name('videos');

Route::get('/fans', function () {
  $comics = config('comics');
  return view('partials.fans', compact('comics'));
})->name('fans');

Route::get('/news', function () {
  $comics = config('comics');
  return view('partials.news', compact('comics'));
})->name('news');

Route::get('/shop', function () {
  $comics = config('comics');
  return view('partials.shop', compact('comics'));
})->name('shop');

Route::get('/comic_demo', function () {
  $comics = config('comics');
  return view('partials.comic_demo', compact('comics'));
})->name('comic_demo');
