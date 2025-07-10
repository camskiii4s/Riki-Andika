<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pasien->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label>NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $pasien->nik ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki" {{ old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
        <option value="Perempuan" {{ old('jenis_kelamin', $pasien->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $pasien->tanggal_lahir ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $pasien->alamat ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Telepon</label>
    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $pasien->telepon ?? '') }}">
</div>

<button type="submit" class="btn btn-success">Simpan</button>
