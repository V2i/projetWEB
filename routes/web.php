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

Route::get('/houses', 'MaisonsController@index')->name('houses');
Route::get('/house/{id}', 'MaisonsController@show')->name('house');



Route::middleware('admin')->group(function(){

    Route::get('/picture', 'PhotosController@index')->name('photo');
    Route::get('/add', 'MaisonsController@create')->name('housecreate');
    Route::post('/house', 'MaisonsController@store')->name('hstore');
    Route::get('/admin', 'AdminsController@index')->name('admin');
    Route::put('/admin', 'AdminsController@store')->name('adminstore');
});

Route::fallback(function() {
    return redirect()->route('welcome');
});