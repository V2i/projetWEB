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

Auth::routes([
    'verify' => true
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/houses', 'MaisonsController@index')->name('houses');
Route::get('/house/{id}', 'MaisonsController@show')->name('house');

Route::middleware('admin')->group(function(){

    Route::get('/add', 'MaisonsController@create')->name('houseCreate');
    Route::post('/house', 'MaisonsController@store')->name('houseStore');
    Route::get('/admin', 'AdminsController@index')->name('admin');
    Route::put('/admin', 'AdminsController@store')->name('adminStore');
    Route::delete('/admin', 'AdminsController@destroy')->name('adminDelete');
    Route::put('/house/{id}', 'MaisonsController@edit')->name('houseEdit');
    Route::delete('/house/{id}/delete', 'MaisonsController@destroy')->name('houseDelete');
    Route::get('/house/{id}/picture', 'PhotosController@index')->name('housePicture');
});

Route::fallback(function() {
    return redirect()->route('welcome');
});