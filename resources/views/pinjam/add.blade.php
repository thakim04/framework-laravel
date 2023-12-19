<!DOCTYPE html>

<head>
  <title>Tambah Buku</title>
</head>

<body>
  @if ($errors->any())
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{ url('pinjam/save') }}" method="post" accept-charset="utf-8" class="form">
    @csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="" />
    Anggota :
    <select type="text" name="ID_Anggota">
      @foreach ($optpinjam as $key => $value)
      @if (old('Pinjam') == $key)
      <option value="{{ $key }}" selected>{{ $value }}</option>
      @else
      <option value="{{ $key }}">{{ $value }}</option>
      @endif
      @endforeach
    </select>
    <br><br>Buku :
    <select type="text" name="ID_Buku">
      @foreach ($optpinjam1 as $key => $value)
      @if (old('Pinjam1') == $key)
      <option value="{{ $key }}" selected>{{ $value }}</option>
      @else
      <option value="{{ $key }}">{{ $value }}</option>
      @endif
      @endforeach
    </select>
    <br><br>
    Tanggal Pinjam : <br>
    <input type="date" name='Tgl_Pinjam' value="{{ old('Tgl_Pinjam') }}">
    <br><br>
    Tanggal Kembali : <br>
    <input type="date" name='Tgl_Kembali' value="{{ old('Tgl_Kembali') }}">
    <br><br><input type="submit" name="btn_simpan" value="Simpan" />
  </form>
  <br><a href="/perpus">Kembali</a>
</body>

</html>