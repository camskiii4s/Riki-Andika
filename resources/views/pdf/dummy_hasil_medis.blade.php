<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemeriksaan Medis</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            color: #333;
        }
        h2 {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .content {
            margin-top: 30px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            margin-top: 50px;
            font-size: 12px;
            text-align: right;
        }
    </style>
</head>
<body>
    <h2>Hasil Pemeriksaan Laboratorium</h2>

    <div class="content">
        <p><strong>Nama Pasien:</strong> {{ $nama_pasien }}</p>
        <p><strong>Diagnosa:</strong> {{ $diagnosa }}</p>
        <p><strong>Tanggal Pemeriksaan:</strong> {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
        <p><strong>Dokter Pemeriksa:</strong> Dr. Andi Sutrisno</p>
    </div>

    <div class="footer">
        <p>Hasil dicetak otomatis melalui SIMRS UHTP</p>
    </div>
</body>
</html>
