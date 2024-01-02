<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuatPesanan;
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
})->middleware(['guest'])->name('index');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () { 

    // page route

    Route::get('/transaksi', function () {
        return view('/pages/transaksi');
    });  
    Route::get('/kategory', function () {
        return view('pages/kategory');
    }); 
    Route::get('/detailjasa', function () {
        return view('pages/detailjasa');
    });   
    Route::get('/pesan', function () {
        return view('pages/pesan');
    });   Route::get('/chat', function () {
        return view('pages/chat');
    });  
    
    
});

require __DIR__.'/auth.php';
