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

//Route Home
Route::group(['prefix' => 'home'], function(){
    Route::get('', 'HomeController@index');
    Route::delete('{client}', 'HomeController@destroy');
});

//Route Client
Route::group(['prefix' => 'client'], function(){
    Route::get('', 'ClientController@index');
    Route::get('create', 'ClientController@create');
    Route::post('', 'ClientController@store');
    Route::get('{client}', 'ClientController@show');
    Route::get('{client}/edit', 'ClientController@edit');
    Route::put('{client}', 'ClientController@update');
    Route::delete('{client}', 'ClientController@destroy');
});
