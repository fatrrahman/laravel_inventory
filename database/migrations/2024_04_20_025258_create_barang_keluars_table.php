<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_barang_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->nullable();;
            $table->string('id_barang')->nullable();; 
            $table->integer('jumlah_barang')->nullable();;
            $table->string('keterangan')->nullable();; 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barang_keluar');
    }
};
