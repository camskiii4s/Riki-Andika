@extends('front.layout.main_front')

@section('content')

<style>
    .img-hover-zoom {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-hover-zoom:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }
</style>

<h2 class="mb-4">Profil Rumah Sakit</h2>

<div class="row align-items-center">
    <div class="col-md-6">
        <img src="{{ asset('img/hospital.jpg') }}" alt="Gambar Rumah Sakit" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <p>
            Rumah Sakit Sehat Selalu adalah institusi pelayanan kesehatan yang menyediakan layanan medis profesional 
            dengan dukungan teknologi mutakhir dan tenaga medis yang berkompeten.
        </p>
        <ul>
            <li>Didirikan sejak tahun 2000</li>
            <li>Memiliki lebih dari 30 spesialisasi medis</li>
            <li>Tersertifikasi akreditasi nasional KARS</li>
        </ul>
    </div>
</div>

@endsection
