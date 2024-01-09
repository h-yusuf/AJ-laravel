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
            $table->string('id_transaksi');
            $table->integer('idJasa');
            $table->id('id_user');
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
