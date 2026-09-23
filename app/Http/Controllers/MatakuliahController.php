<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::with('dosen')->get();

        return view('matakuliah.index', compact('matakuliahs'));
    }
}