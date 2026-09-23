<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();

    return view('mahasiswa.index', compact('data'));
});

Route::get('/artikel', [ArtikelController::class, 'index']);