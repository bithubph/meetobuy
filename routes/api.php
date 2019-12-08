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
Route::post('register', 'Auth\RegisterController@register');
Route::post('logout', 'Auth\LoginController@logout');

//ServiceProviders


Route::get('services/index','ServiceProController@ind');
Route::get('services/create','ServiceProController@create');
Route::get('services','ServiceProController@index');
Route::get('services/{service}','ServiceProController@show');
Route::post('services','ServiceProController@store');
Route::put('services/{service}','ServiceProController@update');
Route::delete('services/{service}','ServiceProController@delete');
Route::post('search','ServiceProController@search');
