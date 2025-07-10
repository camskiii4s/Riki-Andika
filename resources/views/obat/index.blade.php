@extends('Front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Obat</h2>

    {{-- Gambar di atas tabel --}}
    <div class="text-center">
        <img src="{{ asset('img/obat.jpg') }}" alt="Obat-obatan" class="img-fluid rounded mb-4" style="max-width: 600px;">
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jenis</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($obat as $index => $item)
                @php
                    $expiredDate = \Carbon\Carbon::parse($item->expired_at);
                    $now = \Carbon\Carbon::now();
                    $diffInDays = $now->diffInDays($expiredDate, false);

                    $status = match(true) {
                        $diffInDays < 0 => ['text' => 'Kadaluarsa', 'class' => 'badge bg-danger'],
                        $diffInDays <= 30 => ['text' => 'Segera Kadaluarsa', 'class' => 'badge bg-warning text-dark'],
                        default => ['text' => 'Aman', 'class' => 'badge bg-success'],
                    };
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td> 
                    <td>{{ $item->jenis }}</td>
                    <td>{{ number_format($item->stok) }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $expiredDate->format('d/m/Y') }}</td>
                    <td><span class="{{ $status['class'] }}">{{ $status['text'] }}</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Tidak ada data obat tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection