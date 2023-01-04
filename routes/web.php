<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
    return view('welcome');
});
Route::get('/adc', function () {
    return view('welcome');
});
Route::get('/xyz', function () {
    return view('one');
});
Route::get('/abc', function () {
    return view('onetwo');
});

Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});

// laravel crud oprations
Route::get('/display_form', 'App\Http\Controllers\Icontroller@display_form');
Route::post('/form-submit', 'App\Http\Controllers\Icontroller@form_submit');
Route::get('/display_form', 'App\Http\Controllers\Icontroller@displaydata');
Route::get('/delete-data/{id}', 'App\Http\Controllers\Icontroller@deletedata');
Route::get('/edit_disp/{id}', 'App\Http\Controllers\Icontroller@editdisp');
Route::post('/edit_form/{id}', 'App\Http\Controllers\Icontroller@editdata');
Route::post('/search-record', 'App\Http\Controllers\Icontroller@search');
// Route::get('/profile', 'App\Http\Controllers\IController@profile');
