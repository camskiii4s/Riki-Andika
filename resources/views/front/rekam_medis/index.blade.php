@extends('front.layout.main_front')
@section('title', 'Data Rekam Medis')

@section('content')
<div class="container">
    <h3 class="mb-3">Data Rekam Medis</h3>

    <div class="mb-3">
        <a href="{{ route('rekam.create') }}" class="btn btn-primary">
            + Tambah Rekam Medis
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>Nama Pasien</th>
                <th>Diagnosa</th>
                <th>Hasil Medis (PDF)</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekam as $item)
            <tr>
                <td>{{ $item->nama_pasien }}</td>
                <td>{{ $item->diagnosa }}</td>
                <td>
                    @if ($item->hasil_medis)
                        <a href="{{ asset('storage/' . $item->hasil_medis) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                            Lihat Hasil
                        </a>
                    @else
                        <span class="text-muted">Tidak ada file</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center text-muted">Belum ada data rekam medis.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection