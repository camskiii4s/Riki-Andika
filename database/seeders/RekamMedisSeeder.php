<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RekamMedisSeeder extends Seeder
{
    public function run()
    {
        DB::table('rekam_medis')->insert([
            [
                'nama_pasien' => 'Andi Wijaya',
                'keluhan' => 'Pusing, lemas',
                'diagnosa' => 'Hipertensi Ringan',
                'hasil_medis' => 'Tekanan darah 145/90 mmHg',
                'resep' => 'Amlodipine 5mg',
                'dokter_penanggung_jawab' => 'Dr. Siti Rahma',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Rina Lestari',
                'keluhan' => 'Sering haus',
                'diagnosa' => 'Diabetes Tipe 2',
                'hasil_medis' => 'Gula darah puasa: 180 mg/dL',
                'resep' => 'Metformin 500mg',
                'dokter_penanggung_jawab' => 'Dr. Budi Santosa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Budi Prasetyo',
                'keluhan' => 'Nyeri dada',
                'diagnosa' => 'Angina Stabil',
                'hasil_medis' => 'EKG menunjukkan iskemia ringan',
                'resep' => 'Nitrogliserin 0.5mg',
                'dokter_penanggung_jawab' => 'Dr. Tommy Gunawan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Siti Nurhaliza',
                'keluhan' => 'Demam tinggi',
                'diagnosa' => 'Demam Berdarah',
                'hasil_medis' => 'Trombosit menurun drastis',
                'resep' => 'Paracetamol + cairan IV',
                'dokter_penanggung_jawab' => 'Dr. Lina Kartika',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Yusuf Kurniawan',
                'keluhan' => 'Batuk berdahak',
                'diagnosa' => 'Bronkitis Akut',
                'hasil_medis' => 'Ronchi positif di paru kanan',
                'resep' => 'Amoxicillin 500mg',
                'dokter_penanggung_jawab' => 'Dr. Rian Maulana',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Nina Melati',
                'keluhan' => 'Nyeri haid berlebih',
                'diagnosa' => 'Dismenore',
                'hasil_medis' => 'USG normal',
                'resep' => 'Asam mefenamat',
                'dokter_penanggung_jawab' => 'Dr. Maya Lestari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pasien' => 'Dian Permana',
                'keluhan' => 'Sakit kepala kronis',
                'diagnosa' => 'Migrain',
                'hasil_medis' => 'CT Scan normal',
                'resep' => 'Sumatriptan 50mg',
                'dokter_penanggung_jawab' => 'Dr. Tommy Gunawan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
