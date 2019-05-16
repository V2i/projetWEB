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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/house', 'MaisonsController@index')->name('houses');
Route::get('/house/{id}', 'MaisonsController@show')->name('house');

Route::resource('comment','CommentairesController');
Route::resource('reservation','ReservationsController');

Route::middleware('admin')->group(function(){

    Route::get('/picture', 'PhotosController@index')->name('photo');
    Route::get('/house/create', 'MaisonsController@create')->name('houseCreate');
    Route::post('/house', 'MaisonsController@store')->name('houseStore');
    Route::post('/admin', 'HomeController@admin')->name('admin');

    

});

Route::fallback(function() {
    return redirect()->route('welcome');
});