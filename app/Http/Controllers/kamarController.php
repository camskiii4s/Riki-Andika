<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar; // pastikan ini ditambahkan

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all(); // ambil semua data kamar dari database
        return view('front.kamar.index', compact('kamar')); // kirim data ke view
    }

    // metode lainnya tetap sama...
}
