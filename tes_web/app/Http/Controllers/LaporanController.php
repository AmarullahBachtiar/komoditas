<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = LaporanModel::all();
        return view('laporan.index', compact('laporan'));
    }
}
