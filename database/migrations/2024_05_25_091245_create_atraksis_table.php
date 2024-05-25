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
        Schema::create('atraksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_atraksi');
            $table->string('jenis_atraksi');
            $table->string('tarif_atraksi');
            $table->unsignedBigInteger('id_hotel');
            $table->unsignedBigInteger('id_tempatwisata');
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('hotels');
            $table->foreign('id_tempatwisata')->references('id')->on('tempat_wisatas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atraksis');
    }
};
