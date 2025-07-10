<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\RekamMedis;
use App\Models\Pasien;

// ===== Controllers =====
use App\Http\Controllers\{
    FrontController,
    HomeController,
    RekamMedisController,
    InformasiController,
    KontakController,
    IndentitasController,
    KamarController,
    ObatController,
    JadwalDokterController,
    Front\PendaftaranController,
    PembayaranController,
    PasienController
};

// =======================
// 🌐 HALAMAN UTAMA / FRONT
// =======================
Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [PasienController::class, 'create'])->name('front.pendaftaran');
Route::get('/sambutan', [FrontController::class, 'sambutan'])->name('sambutan.direktur');

// =======================
// PASIEN
// =======================
Route::resource('pasien', PasienController::class);
Route::get('/pasien/export/pdf', [PasienController::class, 'exportPdf'])->name('pasien.export.pdf');

// =======================
// INFORMASI UMUM
// =======================
Route::resource('informasi', InformasiController::class);
Route::resource('kontak', KontakController::class);
Route::get('/identitas', [IndentitasController::class, 'index'])->name('identitas.index');

// =======================
//  MODUL SIMRS
// =======================
Route::resource('kamar', KamarController::class);
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'index'])->name('jadwal.index');
Route::resource('pembayaran', PembayaranController::class);
Route::get('/pembayaran/export/pdf', [PembayaranController::class, 'exportPdf'])->name('pembayaran.export.pdf');
Route::redirect('/farmasi', '/obat');
Route::resource('obat', ObatController::class);


// =======================
//  REKAM MEDIS
// =======================
Route::get('/rekam-medis', [RekamMedisController::class, 'index'])->name('rekam.index');
Route::resource('rekam', RekamMedisController::class);
Route::resource('rekam-medis', RekamMedisController::class);


// =======================
//  GENERATE DUMMY REKAM MEDIS
// =======================
Route::post('/rekam-medis/generate-dummy', function () {
    for ($i = 1; $i <= 20; $i++) {
        $nama_pasien = "Pasien ke-$i";
        $diagnosa = "Diagnosa simulasi pasien ke-$i: Hipertensi & Kolesterol";

        $pdfContent = view('pdf.dummy_hasil_medis', compact('nama_pasien', 'diagnosa'))->render();
        $pdf = Pdf::loadHTML($pdfContent);

        $filename = 'hasil_lab_' . Str::random(6) . '.pdf';
        $filePath = "hasil_medis/{$filename}";

        Storage::disk('public')->put($filePath, $pdf->output());

        RekamMedis::create([
            'nama_pasien'  => $nama_pasien,
            'diagnosa'     => $diagnosa,
            'hasil_medis'  => $filePath,
        ]);
    }

    return redirect()->route('rekam.index')->with('success', '✅ 20 data dummy berhasil digenerate.');
})->name('rekam.generate');
