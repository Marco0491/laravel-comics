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

Route::get('/comics', function () {
    $comics = config('comics');
    return view('guest.comics', ["comicsList" => $comics]);
});

Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    if( is_numeric($index) && $index >= 0 && $index < count($comics)){
        return view('guest.comicDetail', ["comicDetail" => $comics[$index]]);
    } else {
        abort(404);
    };
})->name('comic-detail');
