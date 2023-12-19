<!DOCTYPE html>
<html>

<head>
  <title>Aplikasi Perpustakaan</title>
</head>

<body>
  <h2>Aplikasi Perpustakaan FTIK USM</h2>
  <b>Pilihan menu</b>
  <ol>
    <li><a href="{{ url('buku') }}">Kelola data buku</a></li>
    <li><a href="{{ url('anggota') }}">Kelola data anggota</a></li>
    <li><a href="{{ url('pinjam') }}">Kelola data pinjam</a></li>
  </ol>
  <a href="/logout">logout</a>
</body>

</html>