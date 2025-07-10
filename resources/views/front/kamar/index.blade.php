@extends('Front.layout.main_front')

@section('content')
    <div class="container mt-4">
        <h2>Informasi Kamar Rumah Sakit</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="row">
      
        @if($kamar->count())
            <div class="text-center col md-6">
                <img src="{{ asset('img/kamar1.jpg') }}" alt="Kamar Rumah Sakit VIP" class="img-fluid rounded mb-3" style="max-width: 600px;">
            </div>

            <table class="table table-bordered mt-3 col md-6">
                <thead class="table-light">
                    <tr>
                        <th>Nama Kamar</th>
                        <th>Harga</th>
                        <th>Kapasitas</th>
                        <th>Tipe Kamar</th>
                        <th>Tersedia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamar as $index => $item)
                        <tr>
                            <td>{{ $item->nama_kamar }}</td>
                            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->kapasitas }}</td>
                            <td>{{ $item->tipe_kamar }}</td>
                            <td>{{ $item->tersedia == 1 ? 'Ya' : 'Full' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-3">Belum ada data kamar tersedia.</p>
        @endif
          
    </div>
    </div>
@endsection
