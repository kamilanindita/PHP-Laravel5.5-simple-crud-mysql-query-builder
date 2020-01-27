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

Route::get('/', function () {
    return redirect('/buku');
});

Route::get('/buku','BukuController@index');
Route::get('/buku/tambah','BukuController@tambah');
Route::post('/buku/simpan','BukuController@simpan');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');
Route::get('/buku/hapus/{id}','BukuController@hapus');