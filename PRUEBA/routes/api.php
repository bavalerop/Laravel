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


Route::get('/estudiante','EstudianteController@index');
Route::post('/estudiante','EstudianteController@create');
Route::get('/estudiante/{id?}','EstudianteController@show');
Route::put('/estudiante/{id?}','EstudianteController@update');
Route::delete('/estudiante/{id?}','EstudianteController@delete');