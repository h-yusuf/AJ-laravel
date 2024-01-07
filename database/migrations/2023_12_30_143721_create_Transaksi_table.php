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
        Schema::create('Transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('id_jasa');
            $table->string('layanan_utama');
            $table->string('layanan_tambahan');
            $table->string('date');
            $table->string('time');
            $table->string('alamat');
            $table->string('ciriRumah');
            $table->string('note');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transaksi');
    }
};
