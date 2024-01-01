<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('example/example');
});
Route::get('/transaksi', function () {
    return view('pages/transaksi');
});

use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BuatPesanan;

Route::get('/login', [LoginController::class, 'index'])->name('login_i');


Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    
    
});


Route::get('/home', [homeController::class, 'home'])->name('home');
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin.auth'], 'as' => 'admin.'], function () {
//     Route::get('/home', [homeController::class, 'home'])->name('home');
// });
Route::get('/transaksi', [BuatPesanan::class, 'showItem'])->name('showItem');


Route::post('/simpanData', [BuatPesanan::class, 'simpanData'])->name('simpanData');

Route::post('/deleteItem', [BuatPesanan::class, 'deleteItem'])->name('deleteItem');

Route::post('/tambahItem', [BuatPesanan::class, 'tambahItem'])->name('tambahItem');

Route::post('/process', function (Request $request) {
    $selectedValue = $request->input('optradio');
    // dd($selectedValue);
    return "Selected Value: $selectedValue";
})->name('process');