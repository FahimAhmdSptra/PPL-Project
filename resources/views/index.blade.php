<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Beasiswa</title>
</head>
<body>
    <h1>Daftar Beasiswa</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Beasiswa</th>
                <th>Jumlah Dana</th>
                <th>Kategori</th>
                <th>Tanggal Mulai</th>
                <th>Status Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beasiswa as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->nama_beasiswa }}</td>
                    <td>{{ $b->jumlah_dana }}</td>
                    <td>{{ $b->kategori }}</td>
                    <td>{{ $b->tanggal_mulai }}</td>
                    <td>{{ $b->aktif ? 'Aktif' : 'Tidak Aktif' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
