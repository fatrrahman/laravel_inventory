<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->nullable();;
            $table->string('no_transaksi_masuk')->nullable();;           
            $table->date('tgl_masuk')->nullable();;
            $table->integer('qty_masuk')->nullable();;
            $table->bigInteger('total_masuk')->nullable();;
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barang_masuk');
    }
};
