<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MatakuliahController;

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();

    return view('mahasiswa.index', compact('data'));
});

Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);