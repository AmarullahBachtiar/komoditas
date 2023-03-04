<?php

namespace App\Http\Controllers;

use App\Models\KomoditasModel;
use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksi = Produksi::all();
        $items = KomoditasModel::pluck('komoditas_nama', 'id');
        $selectedID = 2;
        return view('produksi.index', compact('produksi', 'items'));
    }
    public function create()
    {
        $komoditas = KomoditasModel::all();
        return view('produksi.create', compact('komoditas'), [
            'title' => 'Tambah Data OTL'
        ]);
    }
    public function edit($id)
    {

        $komoditas = KomoditasModel::all();
        $produksi = Produksi::with('komoditas')->find($id);
        return view('produksi.edit', compact('produksi', 'komoditas'), []);
    }

    public function store(Request $request)
    {

        $request->validate([
            'komoditas_kode' => 'required',
            'produksi' => 'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
        ]);
        Produksi::create([
            'tanggal'                   => $request->tanggal,
            'komoditas_kode'                => $request->komoditas_kode,
            'produksi'            => $request->produksi,



        ]); // send this

        return redirect()->route('produksi.index');
    }
    public function destroy(Produksi $produksi)
    {
        $produksi->delete();
        return redirect()->route('produksi.index')
            ->with('toast_success', 'Data berhasil dihapus');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'komoditas_kode' => 'required',
            'produksi' => 'required'
        ]);
        Produksi::find($id)->update($request->all());

        return redirect()->route('produksi.index')
            ->with('toast_success', 'data berhasil diupdate!');
    }
    public function laporan()
    {
        return view('laporan.index');
    }
}
