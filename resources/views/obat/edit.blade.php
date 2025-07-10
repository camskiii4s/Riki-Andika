@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Obat</h3>
    <form action="{{ route('obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}">
        </div>

        <div class="mb-3">
            <label>Jenis</label>
            <input type="text" name="jenis" class="form-control" value="{{ $obat->jenis }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $obat->stok }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $obat->harga }}">
        </div>

        <div class="mb-3">
            <label>Tanggal Kadaluwarsa</label>
            <input type="date" name="tanggal_kadaluwarsa" class="form-control" value="{{ $obat->tanggal_kadaluwarsa }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
