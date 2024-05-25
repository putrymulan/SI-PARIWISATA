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
        Schema::create('kamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_kamar',10);
            $table->string('no_kamar',10);
            $table->string('jumlah',10);
            $table->string('harga',20);
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
        Schema::dropIfExists('kamars');
    }
};
