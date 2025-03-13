<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach ($daftar_buku as $buku)
            <li>
                Judul: {{ $buku->judul }} |
                Penulis: {{ $buku->penulis }} |
                Tahun Terbit: {{ $buku->tahun_terbit }}
            </li>
        @endforeach
    </ul>
</body>
</html>
