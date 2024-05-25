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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komentar');
            $table->date('tanggal_penilaian');
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
        Schema::dropIfExists('penilaians');
    }
};
