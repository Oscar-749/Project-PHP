<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group([
    'prefix' => 'auth'
], function () {
    //Route::post('login', 'App\Http\Controllers\LoginController@login')->middleware(['auth:api', 'scope:admin']);
    Route::post('login', 'App\Http\Controllers\LoginController@login');
    Route::post('signup', 'App\Http\Controllers\SignupController@signUp');
});

Route::get('getUser/{email}', 'App\Http\Controllers\UserController@findByEmail');
Route::post('storeorder', 'App\Http\Controllers\OrderController@store');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/loginuser', function () {
    return view('loginuser');
});
*/
//Route::post('login', '\App\Http\Controllers\LoginController@login');

//Route::apiResource('login', 'App\Http\Controllers\LoginController');