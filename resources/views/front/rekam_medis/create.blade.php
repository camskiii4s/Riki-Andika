@extends('front.layout.main_front')
@section('title', 'Tambah Rekam Medis')

@section('content')
<div class="container">
    <h3>Tambah Rekam Medis</h3>

    <form action="{{ route('rekam.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Diagnosa</label>
            <textarea name="diagnosa" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('rekam.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
