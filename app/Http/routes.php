<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('partials.content');
});

Route::get('buku', 'BukuController@index');

Route::get('buku/{id}', 'BukuController@show');

Route::post('buku', 'BukuController@store');

Route::put('buku/{id}', 'BukuController@update');

Route::delete('buku/{id}', 'BukuController@destroy');

Route::get('hapus-buku/{id}', 'BukuController@destroy');

Route::resource('anggota', 'AnggotaController');

Route::get('hapus-anggota/{id}', 'AnggotaController@destroy');

//Route::group(['middleware' => ['web']], function () {
//    //
//});
