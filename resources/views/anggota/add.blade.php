<!DOCTYPE html>

<head>
  <title>Tambah Anggota</title>
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
  <form action="{{ url('anggota/save') }}" method="post" accept-charset="utf-8">
    @csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Nim : <input type="text" name="Nim" value="{{ old('Nim') }}" size='50' maxlength='100' />
    <br><br>Nama : <input type="text" name="Nama" value="{{ old('Nama') }}" size='50' maxlength='150' />
    <br><br>Progdi : <select name="Progdi">
      @foreach ($optprogdi as $key => $value)
      @if (old('Progdi') == $key)
      <option value="{{ $key }}" selected>{{ $value }}</option>
      @else
      <option value="{{ $key }}">{{ $value }}</option>
      @endif
      @endforeach
    </select>
    <br><br><input type="submit" name="btn_simpan" value="Simpan" />
  </form>
  <br><a href="{{ url('anggota') }}">Kembali</a>
</body>

</html>