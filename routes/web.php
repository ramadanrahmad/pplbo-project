<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;


Route::get('/', function () {
    return view('home');
});


Route::get('/index', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/input', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
