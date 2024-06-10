<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangTerjual extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'tbl_barang_terjual';

    protected $fillable = [
        'nama_barang','no_transaksi_terjual', 'tgl_terjual', 'qty_terjual', 'total_terjual'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
