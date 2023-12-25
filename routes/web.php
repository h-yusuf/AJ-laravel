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

use App\Http\Controllers\LoginController;

Route::post('/prosesLogin', [LoginController::class, 'prosesLogin'])->name('prosesLogin');
Route::post('/prosesRegister', [LoginController::class, 'prosesRegister'])->name('prosesRegister');

// Route::get('/home', [LoginController::class, 'home'])->middleware('checkLogin');

