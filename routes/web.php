<?php

use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\DashboardController;

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



Route::get('/home',[HomeController::class,'index'])->name('home');
// Route::get('/auth',[AuthController::class,'login']);
Route::get('/auth',[AuthController::class,'index'])->name('auth');


Route::get('/go/{tujuan}',[HomeController::class,'redirectTo'])->name('go');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.list');
Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');

Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('pelanggan/edit/{param1}', [PelangganController::class, 'edit'])->name('pelanggan.edit');

Route::post('pelanggan/update/', [PelangganController::class, 'update'])->name('pelanggan.update');

Route::get('pelanggan/destroy/{param1}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
