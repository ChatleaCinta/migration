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
Route::post('register', 'PetugasController@register');
Route::post('login', 'PetugasController@login');
Route::get('/', function(){
    return Auth::user()->level;
})->middleware('jwt.verify');

Route::get('user', 'PetugasController@getAuthenticatedUser')->middleware('jwt.verify');

Route::post('simpan_buku','BukuController@store')->middleware('jwt.verify');
Route::put('/update_buku/{id}','BukuController@update')->middleware('jwt.verify');
Route::delete('hapus_buku/{id}','BukuController@destroy')->middleware('jwt.verify');
Route::get("tampil_buku","BukuController@index")->middleware('jwt.verify');

Route::post('save','AnggotaController@store')->middleware('jwt.verify');
Route::put('/update/{id}','AnggotaController@update')->middleware('jwt.verify');
Route::delete('delete/{id}','AnggotaController@destroy')->middleware('jwt.verify');
Route::get("show","AnggotaController@index")->middleware('jwt.verify');


