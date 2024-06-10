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
        Schema::create('tbl_barang_terjual', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->nullable();;
            $table->string('no_transaksi_terjual')->nullable();;           
            $table->date('tgl_terjual')->nullable();;
            $table->integer('qty_terjual')->nullable();;
            $table->bigInteger('total_terjual')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_barang_terjual');
    }
};
