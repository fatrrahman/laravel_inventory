<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_barang.id_kategori')
                        ->select('tbl_barang.*', 'tbl_kategori.nama_kategori')
                        ->get();
        $data = array(
            'title'         => 'Data barang',
            'data_kategori' => Kategori::all(),
            'data_barang'   => $barang,
        );
        return view('admin.barang', $data);
    }

    public function store(Request $request)
    {
        Barang::create([
            'id_kategori'   => $request->id_kategori,
            'nama_barang'   => $request->nama_barang,
            'stok'          => $request->stok,
            'harga'         => $request->harga,
        ]);

        return redirect('/barang');
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $barang->update([
            'id_kategori'   => $request->id_kategori,
            'nama_barang'   => $request->nama_barang,
            'stok'          => $request->stok,
            'harga'         => $request->harga,
        ]);

        return redirect('/barang');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);

        $barang ->delete();

        return redirect('/barang');
    }
}
