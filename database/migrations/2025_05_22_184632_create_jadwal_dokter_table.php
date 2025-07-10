<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDokterTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->string('spesialis');
            $table->string('hari_praktik'); // Contoh: Senin, Selasa, dst
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->text('keterangan')->nullable(); // Optional
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_dokter');
    }
}
