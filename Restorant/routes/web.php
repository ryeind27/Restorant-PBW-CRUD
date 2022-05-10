<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tampildata', 'MahasiswaController@readdata');
Route::get('/tambahdata','MahasiswaController@input');
Route::post('/mahasiswa/store', 'MahasiswaController@store');

Route::get('/mahasiswa/edit/{nim}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update');
Route::get('/mahasiswa/hapus/{nim}', 'MahasiswaController@hapus');
