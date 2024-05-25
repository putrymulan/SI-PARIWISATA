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
        Schema::create('kriteria_hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tamu');
            $table->string('nilai');
            $table->unsignedBigInteger('id_hotel');
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_hotels');
    }
};
