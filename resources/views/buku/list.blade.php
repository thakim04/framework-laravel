<!DOCTYPE html>
<html>

<head>
  <title>Tambah Buku</title>
</head>

<body>
  <a href="{{ url('buku/add') }}">Tambah Buku</a><br><br>
  <table border='1'>
    <tr>
      <th>no</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
    @php
    $no = 0;
    @endphp

    @foreach($query as $row)
    @php
    $no++;
    @endphp
    <tr>
      <td>{{ $no }}</td>
      <td>{{ $row['Judul'] }}</td>
      <td>{{ $row['Pengarang'] }}</td>
      <td>{{ $optkategori[$row['Kategori']] }}</td>
      <td><a href={{ url('buku/edit/'.$row['ID_Buku']) }}>Edit</a>
        <a href={{ url('buku/delete/'.$row['ID_Buku']) }} onclick="return confirm('Yakin?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
  <p>{{ $query->links('vendor.pagination.mypage') }} </p>
  <a href="/perpus">Kembali</a>
</body>

</html>