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
    $comics_data = config('comics');
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics_data = config('comics');
    return view('comics');
})->name('comics');