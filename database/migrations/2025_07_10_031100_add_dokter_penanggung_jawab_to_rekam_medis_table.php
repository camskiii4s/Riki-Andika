<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('rekam_medis', function (Blueprint $table) {
        $table->string('dokter_penanggung_jawab')->nullable();
    });
}

public function down()
{
    Schema::table('rekam_medis', function (Blueprint $table) {
        $table->dropColumn('dokter_penanggung_jawab');
    });
}

    }
;
