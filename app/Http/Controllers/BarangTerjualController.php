<?php

namespace App\Http\Controllers;

use App\Models\BarangTerjual;
use Illuminate\Http\Request;

class BarangTerjualController extends Controller
{
    public function index()
    {
        $barang = BarangTerjual::all();
        $data = array(
            'title'       => 'Data Barang Terjual',
            'data_barangterjual' => $barang,
        );
        return view('admin.barangterjual', $data);
    }

    public function store(Request $request)
    {
        BarangTerjual::create([
            'nama_barang'        => $request->nama_barang,
            'no_transaksi_terjual' => $request->no_transaksi_terjual,           
            'tgl_terjual'          => $request->tgl_terjual,
            'qty_terjual'          => $request->qty_terjual,
            'total_terjual'        => $request->total_terjual,
        ]);

        return redirect('/barangterjual');
    }

    public function update(Request $request, $id)
    {
        $barang = BarangTerjual::find($id);

        $barang->update([
            'nama_barang'        => $request->nama_barang,
            'no_transaksi_terjual' => $request->no_transaksi_terjual,          
            'tgl_terjual'          => $request->tgl_terjual,
            'qty_terjual'          => $request->qty_terjual,
            'total_terjual'        => $request->total_terjual,
        ]);

        return redirect('/barangterjual');
    }

    public function destroy($id)
    {
        $barang = BarangTerjual::find($id);

        $barang->delete();

        return redirect('/barangterjual');
    }
}

