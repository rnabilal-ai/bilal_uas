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
        Schema::create('pesanans', function (Blueprint $table){
            $table->id('');
            $table->bigInteger('id_staff');
            $table->bigInteger('id_pelanggan');
            $table->bigInteger('id_jenis');
            $table->date('tgl_pesan');
            $table->date('tgl_pengembalian');
            $table->string('time');
            $table->string('ttl_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
