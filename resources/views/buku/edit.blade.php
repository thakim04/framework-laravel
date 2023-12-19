<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Buku</title>
</head>

<body>
  <form action="{{ url('buku/save') }}" method="post" accept-charset=utf-8>
    @csrf
    <input type="hidden" name="id" value="{{ $query->ID_Buku }}">
    <input type="hidden" name="is_update" value="{{ $is_update }}">
    Judul : <input type="hidden" name="Judul" value="{{ $query->Judul }}" size='50' maxlength='100'>
    <br><br>Pengarang : <input type="text" name="Pengarang" value="{{ $query->Pengarang }}" size='50' maxlength='150'>
    <br><br>Kategori : <select name="Kategori">
      @foreach ($optkategori as $key => $value)
      @if ($query->Kategori ==$key)
      <option value="{{ $key }}" select>{{ $value }}</option>
      @else
      <option value="{{ $key }}">{{ $value }}</option>
      @endif
      @endforeach
    </select>
    <br><br><input type="submit" name="btn_simpan" value="Simpan">
  </form>
</body>

</html>