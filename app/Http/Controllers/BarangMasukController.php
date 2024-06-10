<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barang = BarangMasuk::all();
        $data = array(
            'title'       => 'Data Barang Masuk',
            'data_barangmasuk' => $barang,
        );
        return view('admin.barangmasuk', $data);
    }

    public function store(Request $request)
    {
        BarangMasuk::create([
            'nama_barang'        => $request->nama_barang,
            'no_transaksi_masuk' => $request->no_transaksi_masuk,           
            'tgl_masuk'          => $request->tgl_masuk,
            'qty_masuk'          => $request->qty_masuk,
            'total_masuk'        => $request->total_masuk,
        ]);

        return redirect('/barangmasuk');
    }

    public function update(Request $request, $id)
    {
        $barang = BarangMasuk::find($id);

        $barang->update([
            'nama_barang'        => $request->nama_barang,
            'no_transaksi_masuk' => $request->no_transaksi_masuk,          
            'tgl_masuk'          => $request->tgl_masuk,
            'qty_masuk'          => $request->qty_masuk,
            'total_masuk'        => $request->total_masuk,
        ]);

        return redirect('/barangmasuk');
    }

    public function destroy($id)
    {
        $barang = BarangMasuk::find($id);

        $barang->delete();

        return redirect('/barangmasuk');
    }
}

