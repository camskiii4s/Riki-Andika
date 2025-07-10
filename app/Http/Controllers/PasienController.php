<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'           => 'required|string|max:100',
            'nik'            => 'required|digits:16|unique:pasiens,nik',
            'alamat'         => 'required|string',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir'  => 'required|date',
            'telepon'        => 'nullable|string|max:15'
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', '✅ Pasien berhasil ditambahkan.');
    }

    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama'           => 'required|string|max:100',
            'nik'            => 'required|digits:16|unique:pasiens,nik,' . $pasien->id,
            'alamat'         => 'required|string',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir'  => 'required|date',
            'telepon'        => 'nullable|string|max:15'
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', '✅ Pasien berhasil ditambahkan.');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', '🗑️ Pasien berhasil dihapus.');
    }

    // Tambahan: Export PDF
    public function exportPdf()
    {
        $pasiens = Pasien::all();
        $pdf = Pdf::loadView('pdf.pasien', compact('pasiens'));
        return $pdf->download('data_pasien.pdf');
    }
}
