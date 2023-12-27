<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/other', function () {
    return 'Halaman About';
});

Route::get('/kategory', function () {
    return view('pages/kategory');
});

Route::get('/detailjasa', function () {
    return view('pages/detailjasa');
});

Route::get('/pesan', function () {
    return view('pages/pesan');
});

Route::get('/chat', function () {
    return view('pages/chat');
});
Route::get('/test', function () {
    return view('pages/example');
});
Route::get('/transaksi', function () {
    return view('pages/transaksi');
});

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BuatPesanan;

Route::post('/prosesLogin', [LoginController::class, 'prosesLogin'])->name('prosesLogin');
Route::post('/prosesRegister', [LoginController::class, 'prosesRegister'])->name('prosesRegister');

Route::post('/simpanData', [BuatPesanan::class, 'simpanData'])->name('simpanData');

// Route::post('/simpan-data', [BuatPesanan::class, 'simpanData'])->name('simpan.data');

Route::post('/pages/transaksi', [BuatPesanan::class, 'simpanData'])->name('simpanData');

Route::post('/tambahItem', [BuatPesanan::class, 'tambahItem'])->name('tambahItem');

// Route::post('/pages/pesan', [BuatPesanan::class, 'tambahItem'])->name('tambahItem');

// web.php
Route::post('/transaksi', [BuatPesanan::class, 'showItem'])->name('showItem');

Route::post('/pages/transaksi', [BuatPesanan::class, 'showItem'])->name('showItem');

// Route::resource('/showItem', BuatPesanan::class);
// Route::post('/pages/transaksi', [BuatPesanan::class, 'showItem'])->name('showItem');

// Route::get('data/showItem', [BuatPesanan::class, 'showItem'])->name('showitem');

// Route::get('/transaksi', [BuatPesanan::class, 'showItem'])->name('showitem');
// Route::get('santri/tampil', [SantriController::class, 'tampilsantri'])->name('tampilsantri')->middleware('auth');

// Route::get('/home', [LoginController::class, 'home'])->middleware('checkLogin');