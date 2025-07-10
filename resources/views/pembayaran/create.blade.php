@extends('front.layout.main_front')
@section('title', 'Tambah Pembayaran')
@section('content')

<div class="container">
    <h3>Form Tambah Pembayaran</h3>

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
