<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_rak_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->string('nama_barang')->nullable();;
            $table->string('id_barang')->nullable();; 
            $table->integer('nomor_rak')->nullable();;
            $table->bigInteger('harga_barang')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_rak_barang');
    }
};
