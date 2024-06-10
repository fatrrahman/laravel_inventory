<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barang = BarangKeluar::all();
        $data = array(
            'title'       => 'Data Barang Keluar',
            'data_barangkeluar' => $barang,
        );
        return view('admin.barangkeluar', $data);
    }


    public function store(Request $request)
    {
        BarangKeluar::create([
            'nama_barang'   => $request->nama_barang,
            'id_barang'     => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan'    => $request->keterangan,
        ]);

        return redirect('/barangkeluar');
    }

    public function update(Request $request, $id)
    {
        $barang = BarangKeluar::find($id);

        $barang->update([
            'nama_barang'   => $request->nama_barang,
            'id_barang'     => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan'    => $request->keterangan,
        ]);

        return redirect('/barangkeluar');
    }

    public function destroy($id)
    {
        $barang = BarangKeluar::find($id);

        $barang ->delete();

        return redirect('/barangkeluar');
    }
}

