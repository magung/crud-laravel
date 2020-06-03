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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','DataController@home');
Route::get('/highcharts','DataController@highcharts');
Route::get('/diagrampie','DataController@diagrampie');
Route::get('/input','DataController@input');
Route::post('/tambah','DataController@tambah');
Route::get('/hapus/{id}','DataController@hapus');
Route::get('/edit/{id}','DataController@edit');
Route::put('/update/{id}','DataController@update');