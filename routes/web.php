<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{naila}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']) ;

Route::get('/about', function(){
    return view('halaman-about');
});



Route::get('/matakuliah/show/{param1?}', function ($param1 = 'Masukkan kode matakuliah!') {
    return 'Anda mengakses matakuliah : '.$param1;
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
