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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('register', 'ApiAuthController@register');
Route::post('login', 'ApiAuthController@login');
Route::post('recover', 'ApiAuthController@recover');


Route::group(['middleware' => ['jwt.auth','auth:api']], function() {
    Route::get('logout', 'ApiAuthController@logout');
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
    });
