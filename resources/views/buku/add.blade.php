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
  <form action="{{ url('buku/save') }}" method="post" accept-charset="utf-8">
    @csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Judul : <input type="text" name="Judul" value="{{ old('Judul') }}" size='50' maxlength='100' />
    <br><br>Pengarang : <input type="text" name="Pengarang" value="{{ old('Pengarang') }}" size='50' maxlength='150' />
    <br><br>Kategori : <select name="Kategori">
      @foreach ($optkategori as $key => $value)
      @if (old('Kategori') == $key)
      <option value="{{ $key }}" selected>{{ $value }}</option>
      @else
      <option value="{{ $key }}">{{ $value }}</option>
      @endif
      @endforeach
    </select>
    <br><br><input type="submit" name="btn_simpan" value="Simpan" />
  </form>
  <br><a href="{{ url('buku') }}">Kembali</a>
</body>

</html>