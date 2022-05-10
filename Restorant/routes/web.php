<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\RestoController;

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
    return view('index');
});

Route::get('/tampildata', 'RestoController@readdata');
Route::get('/tambahdata','RestoController@input');
Route::post('/restorant/store', 'RestoController@store');

Route::get('/restorant/edit/{nama_pemesan}', 'RestoController@edit');
Route::post('/restorant/update', 'RestoController@update');
Route::get('/restorant/hapus/{nama_pemesan}', 'RestoController@hapus');
