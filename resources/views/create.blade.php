<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Beasiswa</title>
</head>
<body>
    <h1>Form Tambah Beasiswa</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="nama_beasiswa">Nama Beasiswa:</label>
        <input type="text" id="nama_beasiswa" name="nama_beasiswa" required><br><br>

        <label for="jumlah_dana">Jumlah Dana:</label>
        <input type="number" id="jumlah_dana" name="jumlah_dana" required><br><br>

        <label for="kategori">Kategori:</label>
        <select id="kategori" name="kategori">
            <option value="akademik">Akademik</option>
            <option value="non-akademik">Non-Akademik</option>
        </select><br><br>

        <label for="tanggal_mulai">Tanggal Mulai:</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" required><br><br>

        <input type="hidden" name="aktif" value="0">

        <label for="aktif">Aktif:</label>
        <input type="checkbox" id="aktif" name="aktif" value="1"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
