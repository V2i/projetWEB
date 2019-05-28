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
// Route::post('/home', 'UsersController@update')->name('userUpdate');
// Route::post('/welcome', 'UsersController@destroy')->name('userDelete');

Route::get('/houses', 'MaisonsController@index')->name('houses');
Route::get('/house/{id}', 'MaisonsController@show')->name('house');

Route::get('/house/{id}/reservation', 'ReservationsController@create')->name('reservationForm')->middleware('auth');
Route::get('/reservations', 'ReservationsController@index')->name('reservation')->middleware('auth');
Route::post('/reservations', 'ReservationsController@store')->name('reservationStore')->middleware('auth');
Route::delete('/reservations', 'ReservationsController@destroy')->name('reservationDelete')->middleware('auth');

Route::middleware('admin')->group(function(){

    Route::get('/admin', 'AdminsController@index')->name('admin');
    Route::put('/admin', 'AdminsController@store')->name('adminStore');
    Route::delete('/admin', 'AdminsController@destroy')->name('adminDelete');
    Route::get('/admin/reservations', 'AdminsController@reservationsAdmin')->name('adminReservation');
    Route::delete('/admin/reservations', 'AdminsController@deleteReservationAdmin')->name('adminReservationDelete');

    Route::get('/add', 'MaisonsController@create')->name('houseCreate');
    Route::post('/house', 'MaisonsController@store')->name('houseStore');
    Route::put('/house/{id}', 'MaisonsController@edit')->name('houseEdit');
    Route::delete('/house/{id}/delete', 'MaisonsController@destroy')->name('houseDelete');

    Route::get('/house/{id}/picture', 'PhotosController@index')->name('housePicture');
    Route::post('/house/{id}/picture', 'PhotosController@store')->name('pictureStore');
    Route::delete('/house/{id}/picture', 'PhotosController@destroy')->name('pictureDelete');

});

Route::fallback(function() {
    return redirect()->route('welcome');
});