<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [
    'uses'=>'MobileApi@login'
]);

Route::post('/updateLocation', [
    'uses'=>'MobileApi@updateLocation'
])->middleware('auth:api');


Route::post('/logout', [
    'uses'=>'MobileApi@logout'
])->middleware('auth:api');


Route::get('/getFlights', [
    'uses'=>'MobileApi@getFlights'
])->middleware('auth:api');


Route::get('/getBaggages', [
    'uses'=>'MobileApi@getBaggages'
])->middleware('auth:api');