<h3 style="text-align: center;">Daftar Pasien</h3>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $no => $pasien)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->nik }}</td>
            <td>{{ $pasien->tanggal_lahir }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->alamat }}</td>
            <td>{{ $pasien->no_hp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
