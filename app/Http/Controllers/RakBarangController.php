<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RakBarang;
use App\Models\Kategori;

class RakBarangController extends Controller
{
    public function index()
    {
        $rakbarang = RakBarang::join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_rak_barang.id_kategori')
                        ->select('tbl_rak_barang.*', 'tbl_kategori.nama_kategori')
                        ->get();
        $data = array(
            'title'         => 'Rak Barang',
            'data_kategori' => Kategori::all(),
            'data_rakbarang'   => $rakbarang,
        );
        return view('admin.rakbarang', $data);
    }

    public function store(Request $request)
    {
        RakBarang::create([
            'id_kategori'   => $request->id_kategori,
            'nama_barang'   => $request->nama_barang,
            'id_barang'     => $request->id_barang,
            'nomor_rak'     => $request->nomor_rak,
            'harga_barang'  => $request->harga_barang,
        ]);

        return redirect('/rakbarang');
    }

    public function update(Request $request, $id)
    {
        $rakbarang = RakBarang::find($id);

        $rakbarang->update([
            'id_kategori'   => $request->id_kategori,
            'nama_barang'   => $request->nama_barang,
            'id_barang'     => $request->id_barang,
            'nomor_rak'     => $request->nomor_rak,
            'harga_barang'  => $request->harga_barang,
        ]);

        return redirect('/rakbarang');
    }

    public function destroy($id)
    {
        $rakbarang = RakBarang::find($id);

        $rakbarang ->delete();

        return redirect('/rakbarang');
    }
}
