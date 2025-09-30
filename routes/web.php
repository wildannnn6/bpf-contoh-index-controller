<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PegawaiController;

route::resource('/pegawai', PegawaiController::class);


Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});


route::get('/home', [HomeController::class, 'index']);

route:: get('/signup', [HomeController::class, 'signup']);

Route::get('/login', function () {
    return view('simple-home');
});

Route::get('/home/signup',[HomeController::class,'index']);
Route::get('/auth',[AuthController::class,'index']);

Route::post('/home/signup',[HomeController::class,'signup']);
Route::post('/auth/login',[AuthController::class,'login']);



