<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/comics', [PageController::class, "comics"])->name('comics');

//  COMICS DETAIL PAGE
Route::get('/comic_detail/{index}', [PageController::class, "comicDetail"])->name('comic_detail');



//  DEMO ROUTES
Route::get('/characters', function () {
  $comics = config('comics');
  return view('partials.characters', compact('comics'));
})->name('characters');

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


