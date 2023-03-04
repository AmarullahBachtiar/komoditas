<?php

namespace App\Http\Controllers;

use App\Models\KomoditasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomoditasController extends Controller
{
    public function index()
    {
        $komoditas = KomoditasModel::all();
        return view('komoditas.index', compact('komoditas'));
    }
    public function show($id)
    {
        $komoditas = KomoditasModel::find($id);
        return view('komoditas.detail', compact('komoditas'), []);
    }
    public function create()
    {
        $komoditas = KomoditasModel::all();
        return view('komoditas.create', compact('komoditas'), []);
    }
    public function store(Request $request)
    {
        $request->validate([
            'komoditas_kode' => 'required',
            'komoditas_nama' => 'required',

        ]);
        KomoditasModel::create($request->all());
        return redirect()->route('komoditas.index')
            ->with('toast_success', 'data penggarap berhasil ditambahkan');
    }
    public function edit($id)
    {

        $komoditas = KomoditasModel::find($id);
        return view('komoditas.edit', compact('komoditas'), [
            'title' => 'edit garapan'
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'komoditas_kode' => 'required',
            'komoditas_nama' => 'required'
        ]);
        KomoditasModel::find($id)->update($request->all());

        return redirect()->route('komoditas.index')
            ->with('toast_success', 'data berhasil diupdate!');
    }
    public function destroy(KomoditasModel $komoditas)
    {
        $komoditas->delete();
        return redirect()->route('produksi.index')
            ->with('toast_success', 'Data berhasil dihapus');
    }
}
