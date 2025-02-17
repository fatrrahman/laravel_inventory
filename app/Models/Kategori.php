<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori';

    protected $fillable = [
        'nama_kategori',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
