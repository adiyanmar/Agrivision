<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeteksiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/deteksi', [DeteksiController::class, 'form'])->name('deteksi');
Route::post('/hasil-deteksi', [DeteksiController::class, 'prosesData'])->name('hasil-deteksi');
Route::get('/riwayat', [DeteksiController::class, 'riwayat'])->name('riwayat');