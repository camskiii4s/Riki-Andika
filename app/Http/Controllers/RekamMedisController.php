<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::latest()->get();
        return view('front.rekam_medis.index', compact('rekam'));
    }

    public function create()
    {
        return view('front.rekam_medis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'diagnosa' => 'required',
        ]);

        RekamMedis::create($request->only('nama_pasien', 'diagnosa'));

        return redirect()->route('rekam.index')->with('success', 'Rekam medis berhasil ditambahkan.');
    }
}