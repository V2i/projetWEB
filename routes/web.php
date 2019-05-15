<?php

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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/house', 'MaisonsController@index')->name('house');

Route::resource('comment','CommentairesController');
Route::resource('reservation','ReservationsController');

Route::middleware('admin')->group(function(){

    Route::get('/picture', 'PhotosController@index')->name('photo');

});

