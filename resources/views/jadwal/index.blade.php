@extends('Front.layout.main_front')

@section('content')
<div class="container">
    <h1 class="mb-4">Jadwal Praktik Dokter</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Hari Praktik</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
                <tr>
                    <td>{{ $item->nama_dokter }}</td>
                    <td>{{ $item->spesialis }}</td>
                    <td>{{ $item->hari_praktik }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->jam_mulai)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->jam_selesai)->format('H:i') }}</td>
                    <td>{{ $item->keterangan ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
