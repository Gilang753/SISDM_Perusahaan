<?php

use Illuminate\Support\Facades\Route;
// Import Controllers

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\JenisIjinController;
use App\Http\Controllers\PengajuanIjinController;
use App\Http\Controllers\TunjanganController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\PengembanganDiriController;
use App\Http\Controllers\PendidikanController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Resource Routes

Route::resource('pengguna', PenggunaController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('jenisijin', JenisIjinController::class);
Route::resource('pengajuanijin', PengajuanIjinController::class);
Route::resource('tunjangan', TunjanganController::class);
Route::resource('gaji', GajiController::class);
Route::resource('pengembangandiri', PengembanganDiriController::class);
Route::resource('pendidikan', PendidikanController::class);


Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/jenisijin', [JenisIjinController::class, 'index'])->name('jenisijin.index');
Route::get('/pengajuanijin', [PengajuanIjinController::class, 'index'])->name('pengajuanijin.index');
Route::get('/tunjangan', [TunjanganController::class, 'index'])->name('tunjangan.index');
Route::get('/gaji', [GajiController::class, 'index'])->name('gaji.index');
Route::get('/pengembangandiri', [PengembanganDiriController::class, 'index'])->name('pengembangandiri.index');
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
