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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kamar');
            $table->unsignedBigInteger('id_tempatwisata');

            $table->foreign('id_kamar')->references('id')->on('kamars');
            $table->foreign('id_tempatwisata')->references('id')->on('tempat_wisatas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
