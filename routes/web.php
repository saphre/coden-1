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

Route::get('/apropos', function () {
    return view('about');
})->name('about');

Route::get('/activitees', function () {
    return view('activities');
})->name('activities');

Route::get('/realisations', function () {
    return view('realizations');
})->name('realizations');

Route::get('/sites-touristiques', function () {
    return view('sites');
})->name('sites');

Route::get('/actualites', function () {
    return view('news');
})->name('news');

Route::get('/contactez-nous', function () {
    return view('contactus');
})->name('contactus');
