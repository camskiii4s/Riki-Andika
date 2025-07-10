<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        .ttd {
            margin-top: 50px;
            text-align: right;
        }
        .ttd img {
            height: 80px;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Pembayaran Pasien</h2>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayarans as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_pasien }}</td>
                <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="ttd">
        <p>Pekanbaru, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
        <p>Direktur RS</p>
        <img src="{{ public_path('img/ttd.png') }}" alt="Tanda Tangan">
        <br>
        <img src="{{ public_path('img/cap-rs.png') }}" alt="Cap Rumah Sakit" style="position: absolute; right: 100px; top: 500px;">
        <p><strong>dr. Kusuma Januarto, Sp.OG., Subsp.Obginsos</strong></p>
    </div>
</body>
</html>
