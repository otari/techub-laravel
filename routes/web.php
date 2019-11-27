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

//Controller Based Route
Route::get('/', ['uses' => 'HomeController@index'])->middleware('checkAge');

Route::get('/register', ['uses' => 'HomeController@showRegForm']);
Route::post('/register', ['uses' => 'HomeController@register']);


//Simple Closure 
Route::get('/welcome', function () {
    return view('welcome');
});

//Route Grouped
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
    	//Go to URL/admin/users
        return 'admin ok ----->';
    });
});

