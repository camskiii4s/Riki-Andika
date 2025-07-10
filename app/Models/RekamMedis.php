<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis'; // nama tabel
    protected $fillable = [
        'nama_pasien', 
        'diagnosa',
        'hasil_medis'
    ];
}