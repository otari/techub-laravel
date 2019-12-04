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
Route::post('user/register', ['uses' => 'Api\UserController@index']);
Route::get('oto', ['uses' => 'CarController@index'])->middleware('auth:api');

Route::resource('cars', 'CarController')->middleware('auth:api');
