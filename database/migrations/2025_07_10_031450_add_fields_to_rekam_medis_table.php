<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('rekam_medis', function (Blueprint $table) {
            $table->text('keluhan')->nullable();
            $table->text('resep')->nullable();
            $table->string('dokter_penanggung_jawab')->nullable();
        });
    }

    public function down()
    {
        Schema::table('rekam_medis', function (Blueprint $table) {
            $table->dropColumn(['keluhan', 'resep', 'dokter_penanggung_jawab']);
        });
    }
};
