@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Rekam Medis</h2>
    <form action="{{ route('rekam-medis.update', $rekam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $rekam->nama_pasien }}" required>
        </div>

        <div class="mb-3">
            <label>Diagnosa</label>
            <textarea name="diagnosa" class="form-control" required>{{ $rekam->diagnosa }}</textarea>
        </div>

        <div class="mb-3">
            <label>File Hasil Medis (PDF)</label>
            @if ($rekam->hasil_medis)
                <p><a href="{{ asset('storage/' . $rekam->hasil_medis) }}" target="_blank">Lihat File Lama</a></p>
            @endif
            <input type="file" name="hasil_medis" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
