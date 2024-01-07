<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\jasaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuatPesanan;
use App\Http\Controllers\showdata;
use Illuminate\Support\Facades\Route;
use App\Models\jasa;

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


Route::middleware('guest')->group(function () {
    Route::get('register', [ProfileController::class, 'create'])
                ->name('register');

    Route::post('register', [ProfileController::class, 'register']);

    Route::get('login', [ProfileController::class, 'create'])
                ->name('login');

    Route::post('login', [ProfileController::class, 'login']);

});

Route::get('/', function () {
    return view('index');
})->middleware(['guest'])->name('index');


Route::get('/home', function () {
    $datajasa = jasa::select('*')
    ->get();
    return view('home', ['datajasa' => $datajasa]);
})->middleware(['auth', 'verified'])->name('home');


Route::get('/test', function () {

    $datajasa = jasa::select('*')
    ->get();
    return view('example.card', ['datajasa' => $datajasa]);
});

    Route::get('/product-login', function () {

        return view('admin/product');
    })->middleware(['auth', 'verified'])->name('home');  

Route::middleware('auth')->group(function () { 

    // page route

    Route::get('/dashboard', function () {
        return view('/admin/dashboard');
    });  
    Route::get('/user', function () {
        return view('/admin/users');
    });  
    // Route::get('/product-login', function () {

    //     return view('/admin/product');
    // });  
    Route::get('/kategory', function () {
        $datajasa = jasa::select('*')
        ->get();
        return view('pages.kategory', ['datajasa' => $datajasa]);
    }); 
    Route::get('/detailjasa', function () {
        return view('pages/detailjasa');
    });   
    Route::get('/pesan', function () {
        return view('pages/pesan');
    });   Route::get('/chat', function () {
        return view('pages/chat');
    });

    // logout
    
    Route::post('logout', [ProfileController::class, 'logout'])
    ->name('logout');

    // admin route

    Route::get('/product', [adminController::class, 'showJasa'])->name('showJasa');
    Route::get('/showCard', [showdata::class, 'showCard'])->name('showCard');
    Route::post('/deleteJasa', [adminController::class, 'deleteJasa'])->name('deleteJasa');
    Route::post('/tambahJasa', [adminController::class, 'tambahJasa'])->name('tambahJasa');
    // Route::put('/updateJasa',  [adminController::class, 'updateJasa'])->name('updateJasa');
    Route::put('/product',  [adminController::class, 'updateJasa'])->name('updateJasa');

    // transaksi route

    Route::post('/sesionJasa', [BuatPesanan::class, 'sesionJasa'])->name('sesionJasa');

    Route::get('/transaksi', [BuatPesanan::class, 'showItem'])->name('showItem');
    Route::post('/simpanData', [BuatPesanan::class, 'simpanData'])->name('simpanData');
    Route::post('/deleteItem', [BuatPesanan::class, 'deleteItem'])->name('deleteItem');
    Route::post('/tambahItem', [BuatPesanan::class, 'tambahItem'])->name('tambahItem');
    Route::post('/editItem', [BuatPesanan::class, 'editItem'])->name('editItem');


});

require __DIR__.'/auth.php';
