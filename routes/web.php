<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']) -> name('home');

Route::get('/login', [AuthController::class, 'login']) -> name('login');
Route::post('/login', [AuthController::class, 'authenticate']) -> name('authenticate');
Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });

    route::get('/pelanggan', [PelangganController::class, 'index']) -> name('pelanggan.index');
    route::get('/pelanggan/create', [PelangganController::class, 'create']) -> name('pelanggan.create');
    route::post('/pelanggan/store', [PelangganController::class, 'store']) -> name('pelanggan.store');
    route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']) -> name('pelanggan.edit');
    route::put('/pelanggan/update/{id}', [PelangganController::class, 'update']) -> name('pelanggan.update');
    route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']) -> name('pelanggan.destroy');

    route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
    route::post('produk/store', [ProdukController::class, 'store'])->name('produk.store');
    route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    route::put('produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    route::delete('produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});