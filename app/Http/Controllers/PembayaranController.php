<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Barryvdh\DomPDF\Facade\Pdf;


class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayaran.index', compact('pembayarans'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string'
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil disimpan.');
    }

    public function exportPdf()
{
    $pembayarans = Pembayaran::all();

    $pdf = Pdf::loadView('pembayaran.pdf', compact('pembayarans'));
    return $pdf->stream('laporan-pembayaran.pdf');
}

}
