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

Route::get('/welcome', function () {
    return view('welcome');
});


//Route for visitor to navigate
Route::get('/', 'PengunjungController@index');
Route::get('/kegiatan-desa', 'PengunjungController@kegiatan');
Route::get('/struktur-organisasi', 'PengunjungController@struktur');

Auth::routes();
Route::group(['middleware' => ['web', 'auth']], function(){
  //Route for Admin

  Route::get('admin', function(){
    return view('admin.home');
  });
  //Potensi Route
  Route::get('admin/potensi', 'PotentialController@index');
  Route::get('admin/potensi-tambah', 'PotentialController@create');
  Route::post('admin/potensi-simpan', 'PotentialController@store');
  Route::get('admin/potensi-hapus/{id}', 'PotentialController@destroy');
  Route::get('admin/potensi-edit/{id}', 'PotentialController@edit');
  Route::post('admin/potensi-update/{id}', 'PotentialController@update');
  Route::get('admin/potensi-lihat/{id}', 'PotentialController@show');

  //Kegiatan Desa Routes
  Route::get('admin/kegiatan-desa', 'ActivityController@index');
  Route::get('admin/kegiatan-desa-tambah', 'ActivityController@create');
  Route::post('admin/kegiatan-desa-simpan', 'ActivityController@store');
  Route::get('admin/kegiatan-desa-edit/{id}', 'ActivityController@edit');
  Route::post('admin/kegiatan-desa-update/{id}', 'ActivityController@update');
  Route::get('admin/kegiatan-desa-hapus/{id}', 'ActivityController@destroy');
  Route::get('admin/kegiatan-desa-lihat/{id}', 'ActivityController@show');

  //Struktur Organisasi Routes

  Route::get('admin/struktur-organisasi', 'StructureController@index');
  Route::get('admin/struktur-organisasi-tambah', 'StructureController@create');
  Route::post('admin/struktur-organisasi-simpan', 'StructureController@store');
  Route::get('admin/struktur-organisasi-edit/{id}', 'StructureController@edit');
  Route::post('admin/struktur-organisasi-update/{id}', 'StructureController@update');
  Route::get('admin/struktur-organisasi-hapus/{id}', 'StructureController@destroy');

});

//Route for Login
