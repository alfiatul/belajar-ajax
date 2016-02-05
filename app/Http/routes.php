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
    return view('partials.home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('pelanggan', 'PelangganController@index');
Route::get('pelanggan/{id}', 'PelangganController@show');
Route::get('/create-pelanggan', function () {
    return view('partials.pelanggan.create');
});
Route::post('pelanggan', 'PelangganController@store');
Route::put('pelanggan/{id}', 'PelangganController@update');
Route::get('hapus-pelanggan/{id}', 'PelangganController@destroy');
Route::get('edit-pelanggan/{id}', 'PelangganController@edit');
Route::post('create-pelanggan', 'PelangganController@create');
Route::get('data-pelanggan', 'pelangganController@getData');
Route::delete('pelanggan/{id}','PelangganController@destroy');


Route::get('apoteker', 'ApotekerController@index');
Route::get('apoteker/{id}', 'ApotekerController@show');
Route::get('/create-apoteker', function () {
    return view('partials.apoteker.create');
});
Route::post('apoteker', 'ApotekerController@store');
Route::put('apoteker/{id}', 'ApotekerController@update');
Route::get('hapus-apoteker/{id}', 'ApotekerController@destroy');
Route::get('edit-apoteker/{id}', 'ApotekerController@edit');
Route::post('create-apoteker', 'ApotekerController@create');
Route::get('data-apoteker', 'ApotekerController@getData');
Route::delete('apoteker/{id}','ApotekerController@destroy');


Route::get('obat', 'ObatController@index');
Route::get('obat/{id}', 'ObatController@show');
Route::get('/create-obat', function () {
    return view('partials.obat.create');
});
Route::post('obat', 'ObatController@store');
Route::put('obat/{id}', 'ObatController@update');
Route::get('hapus-obat/{id}', 'ObatController@destroy');
Route::get('edit-obat/{id}', 'ObatController@edit');
Route::post('create-obat', 'ObatController@create');
Route::get('data-obat', 'ObatController@getData');
Route::delete('obat/{id}','ObatController@destroy');