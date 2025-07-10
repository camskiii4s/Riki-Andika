@extends('front.layout.main_front') {{-- atau sesuaikan dengan layout utama Anda --}}

@section('title', 'Data Pembayaran')

@section('content')
<div class="container mt-4">
    <h2>Data Pembayaran</h2>

    <a href="{{ route('pembayaran.export.pdf') }}" class="btn btn-success mb-3">Export PDF</a>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayarans as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_pasien }}</td>
                <td>Rp {{ number_format($item->jumlah, 2, ',', '.') }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
