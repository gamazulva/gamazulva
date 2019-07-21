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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//menu divisi
Route::get('/divisi','DivisiController@index')->name('divisi');
Route::get('/divisi/tambah','DivisiController@tambah')->name('tambah');
Route::get('/divisi/edit/{id_divisi}','DivisiController@edit')->name('edit');
Route::get('/divisi/hapus/{id_divisi}','DivisiController@hapus')->name('hapus');
Route::post('/divisi/store','DivisiController@store');
Route::post('/divisi/update','DivisiController@update');


//menu KPU
Route::get('/kpu','KpuController@index')->name('kpu');
Route::get('/kpu/tambah','KpuController@tambah')->name('tambah');
Route::get('/kpu/edit/{id_kpu}','KpuController@edit')->name('edit');
Route::get('/kpu/hapus/{id_kpu}','KpuController@hapus')->name('hapus');
Route::post('/kpu/store','KpuController@store');
Route::post('/kpu/update','KpuController@update');

//menu Petugas
Route::get('/petugas','PetugasController@index')->name('petugas');
Route::get('/petugas/tambah','PetugasController@tambah')->name('tambah');
Route::get('/petugas/edit/{id_petugas}','PetugasController@edit')->name('edit');
Route::get('/petugas/hapus/{id_petugas}','PetugasController@hapus')->name('hapus');
Route::post('/petugas/store','PetugasController@store');
Route::post('/petugas/update','PetugasController@update');

//menu Partai
Route::get('/partai','PartaiController@index')->name('partai');
Route::get('/partai/tambah','PartaiController@tambah')->name('tambah');
Route::get('/partai/edit/{id_partai}','PartaiController@edit')->name('edit');
Route::get('/partai/hapus/{id_partai}','PartaiController@hapus')->name('hapus');
Route::post('/partai/store','PartaiController@store');
Route::post('/partai/update','PartaiController@update');

//menu Kandidat
Route::get('/kandidat','KandidatController@index')->name('kandidat');
Route::get('/kandidat/tambah','KandidatController@tambah')->name('tambah');
Route::get('/kandidat/edit/{id_kandidat}','KandidatController@edit')->name('edit');
Route::get('/kandidat/hapus/{id_kandidat}','KandidatController@hapus')->name('hapus');
Route::post('/kandidat/store','KandidatController@store');
Route::post('/kandidat/update','KandidatController@update');


