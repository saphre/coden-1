<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

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

Route::get('/activites', function () {
    return view('activities');
})->name('activities');

Route::get('/realisations', function () {
    return view('realisations');
})->name('realisations');

Route::get('/sites-touristiques', function () {
    return view('sites');
})->name('sites');

Route::get('/actualites', function () {
    return view('news');
})->name('news');

Route::get('/contactez-nous', function () {
    return view('contactus');
})->name('contactus');

Route::post('/create/newsletter',// [NewsletterController::class, "create"]
function ()
{
    return "lol";
}
)->name('create_newsletter');
Route::post('/create/contactus',// [ContactUsController::class, "create"]
function ()
{
    return "contact us process :    ) ";
}
)->name('create_contactus');
