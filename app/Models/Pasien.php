<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nik', 'alamat', 'jenis_kelamin', 'tanggal_lahir', 'telepon'
    ];
}
