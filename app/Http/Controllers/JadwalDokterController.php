<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDokter;

class JadwalDokterController extends Controller
{
    public function index()
    {
        $jadwal = JadwalDokter::all();
        return view('jadwal.index', compact('jadwal'));
    }
}
