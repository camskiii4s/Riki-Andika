@extends('front.layout.main_front')
@section('title', 'Daftar Pasien')

@section('content')
<div class="container mt-4">
    <h3>Daftar Pasien</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pasien.create') }}" class="btn btn-success mb-3">+ Tambah Pasien</a>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pasiens as $pasien)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->tanggal_lahir }}</td>
                    <td>{{ $pasien->telepon }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" class="text-center">Belum ada data pasien.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
