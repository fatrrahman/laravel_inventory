<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBarang extends Model
{
    use HasFactory;

    protected $table = 'tbl_rak_barang';

    protected $fillable = [
        'id_kategori', 'nama_barang', 'id_barang', 'nomor_rak', 'harga_barang'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
