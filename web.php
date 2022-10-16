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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bukutamu','App\Http\Controllers\bukutamuCon@index');
Route::get('bukutamu/tambah','App\Http\Controllers\bukutamuCon@tambah');
Route::post('bukutamu/storetambah','App\Http\Controllers\bukutamuCon@store');

Route::get('bukutamu/edit/{id}','App\Http\Controllers\bukutamuCon@edit');
Route::post('bukutamu/update','App\Http\Controllers\bukutamuCon@storeupdate');

Route::get('bukutamu/hapus/{id}','App\Http\Controllers\bukutamuCon@hapus');
