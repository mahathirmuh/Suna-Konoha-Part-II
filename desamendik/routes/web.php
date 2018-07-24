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

// Route::get('/', function () {
//     return view('');
// });


//Route for visitor to navigate
Route::get('/', 'PengunjungController@index');
Route::get('/kegiatan-desa', 'PengunjungController@kegiatan');
Route::get('/struktur-organisasi', 'PengunjungController@struktur');

//Route for Admin

Route::get('admin/potensi', 'PotentialController@index');
