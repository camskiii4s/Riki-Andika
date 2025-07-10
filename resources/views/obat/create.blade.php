<!DOCTYPE html>
<html>
<head>
    <title>Tambah Obat</title>
</head>
<body>
    <h1>Tambah Obat</h1>
    <form method="POST" action="#">
        @csrf
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="jenis" placeholder="Jenis"><br>
        <input type="number" name="stok" placeholder="Stok"><br>
        <input type="number" name="harga" placeholder="Harga"><br>
        <input type="date" name="expired_at"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
