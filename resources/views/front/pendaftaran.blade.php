@extends('front.layout.main_front')
@section('title', 'Pendaftaran Pasien')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Formulir Pendaftaran Pasien Baru</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Lengkap</label>
            <textarea name="alamat" id="alamat" rows="3" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Nomor Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle"></i> Daftar
        </button>
    </form>
</div>
@endsection
