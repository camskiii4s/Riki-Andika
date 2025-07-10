<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.home');
    }

    public function identitas() {
        return view('front.identitas');
    }

    public function sambutan() {
        return view('front.sambutan');
    }

    public function informasi() {
        return view('front.informasi');
    }

    public function kontak() {
        return view('front.kontak');
    }

    public function pendaftaran() {
        return view('front.pendaftaran');
    }
}
