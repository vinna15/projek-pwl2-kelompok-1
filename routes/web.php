<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/kel-cabang', function () {
    return view('kelolaCabang.index'); 
})->name('cabang');

Route::get('/kel-pegawai', function () {
    return view('kelolaPegawai.index'); 
})->name('pegawai');

Route::get('/stok-barang', function () {
    return view('stokBarang.index'); 
})->name('stok-barang');

Route::get('/laporan', function () {
    return view('laporan.index'); 
})->name('laporan');
