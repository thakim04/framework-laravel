<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Anggota</title>
</head>

<body>
  <form action="{{ url('anggota/save') }}" method="post" accept-charset=utf-8>
    @csrf
    <input type="hidden" name="id" value="{{ $query->ID_Anggota }}">
    <input type="hidden" name="is_update" value="{{ $is_update }}">
    Nim : <input type="text" name="Nim" value="{{ $query->Nim }}" size='50' maxlength='100'>
    <br><br>Nama : <input type="text" name="Nama" value="{{ $query->Nama }}" size='50' maxlength='150'>
    <br><br>Progdi : <select name="Progdi">
      @foreach ($optprogdi as $key => $value)
      @if ($query->Progdi ==$key)
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