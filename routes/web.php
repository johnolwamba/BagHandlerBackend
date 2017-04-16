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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/addBaggage', function () {
        return view('addbaggage');
    });

    Route::get('/allBaggages', function () {
        return view('baggages');
    });

    Route::get('/allFlights', function () {
        return view('flights');
    });

    Route::get('/allNotifications', function () {
        return view('notifications');
    });

    Route::get('/allPassengers', function () {
        return view('passengers');
    });

});
