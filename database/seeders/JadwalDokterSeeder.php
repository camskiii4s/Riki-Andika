<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalDokterSeeder extends Seeder
{
    public function run()
    {
        DB::table('jadwal_dokter')->insert([
            [
                'nama_dokter' => 'Dr. Andi Wijaya',
                'spesialis' => 'Spesialis Anak',
                'hari_praktik' => 'Senin',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '12:00:00',
                'keterangan' => 'Hanya menerima pasien anak di bawah 12 tahun',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_dokter' => 'Dr. Siti Rahma',
                'spesialis' => 'Spesialis Bedah',
                'hari_praktik' => 'Rabu',
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '17:00:00',
                'keterangan' => 'Konsultasi dan tindakan minor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
