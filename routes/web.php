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



Route::get('/cara-pendaftaran', function () {
    return view('surface.cara-pendaftaran');
})->name('cara-pendaftaran');



Route::group(['namespace' => 'Surface'],function() {

    Route::get('/','PendaftaranController@index')->name('pendaftaran');
    Route::post('/','PendaftaranController@index')->name('post.pendaftaran');
    Route::post('/store','PendaftaranController@store')->name('store.pendaftaran');
    Route::get('/cek-pendaftaran','PendaftaranController@informasiPendaftaran')->name('cek-pendaftaran');
    Route::get('/jadwal-dokter','JadwalPraktekController@index')->name('status-dokter');

    Route::get('/daftar-pasien','PasienController@index')->name('daftar-baru');
    Route::post('/daftar-pasien','PasienController@store')->name('surface.store.pasien');

});



Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'],function() {
    Route::get('/admin/riwayat-pendaftaran', 'RiwayatPendaftaranController@index')->name('riwayat-pendaftaran');
    Route::get('/getReservasi', 'RiwayatPendaftaranController@getReservasi')->name('getReservasi');
   
    Route::get('/admin/dokter', 'DokterController@index')->name('dokter');
    Route::get('/admin/dokter/create', 'DokterController@create')->name('dokter.create');
    Route::post('/admin/dokter/store', 'DokterController@store')->name('dokter.store');
    Route::get('/admin/dokter/edit/{id}', 'DokterController@edit')->name('dokter.edit');
    Route::post('/admin/dokter/update/{id}', 'DokterController@update')->name('dokter.update');
    Route::get('/admin/dokter/destroy/{id}', 'DokterController@destroy')->name('dokter.destroy');

    Route::get('/admin/poli', 'PoliController@index')->name('poli');
    Route::get('/admin/poli/create', 'PoliController@create')->name('poli.create');
    Route::post('/admin/poli/store', 'PoliController@store')->name('poli.store');
    Route::get('/admin/poli/edit/{id}', 'PoliController@edit')->name('poli.edit');
    Route::post('/admin/poli/update/{id}', 'PoliController@update')->name('poli.update');
    Route::get('/admin/poli/destroy/{id}', 'PoliController@destroy')->name('poli.destroy');
   
    Route::get('/admin/jadwal-praktek', 'JadwalPraktekController@index')->name('jadwal-praktek');
    Route::get('/admin/jadwal-praktek/create', 'JadwalPraktekController@create')->name('jadwal-praktek.create');
    Route::post('/admin/jadwal-praktek/store', 'JadwalPraktekController@store')->name('jadwal-praktek.store');
    Route::get('/admin/jadwal-praktek/edit/{id}', 'JadwalPraktekController@edit')->name('jadwal-praktek.edit');
    Route::post('/admin/jadwal-praktek/update/{id}', 'JadwalPraktekController@update')->name('jadwal-praktek.update');
    Route::get('/admin/jadwal-praktek/destroy/{id}', 'JadwalPraktekController@destroy')->name('jadwal-praktek.destroy');
    
    Route::get('/admin/pasien', 'PasienController@index')->name('pasien');
    Route::get('/admin/pasien/create', 'PasienController@create')->name('pasien.create');
    Route::post('/admin/pasien/store', 'PasienController@store')->name('pasien.store');
    Route::get('/admin/pasien/edit/{id}', 'PasienController@edit')->name('pasien.edit');
    Route::post('/admin/pasien/update/{id}', 'PasienController@update')->name('pasien.update');
    Route::get('/admin/pasien/destroy/{id}', 'PasienController@destroy')->name('pasien.destroy');

});





