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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengunjung');
            $table->string('alamat_pengunjung');
            $table->string('no_telp');
            $table->date('tanggal_pemesanan');
            $table->string('total_transaksi');
            $table->unsignedBigInteger('id_hotel');
            $table->unsignedBigInteger('id_tempatwisata');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_atraksi'); 
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('hotels');
            $table->foreign('id_tempatwisata')->references('id')->on('tempat_wisatas');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->foreign('id_atraksi')->references('id')->on('atraksis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
