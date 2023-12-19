<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aplikasi Perpustakaan</title>
</head>

<body>
  <h1>Silahkan Login</h1>
  <form action="{{ url('login') }}" method="post" accept-charset="utf-8">
    @csrf
    <label for="username">Username: </label>
    <input type="text" name="username" value="" size="20">
    <br><label for="password">Password: </label>
    <input type="password" name="password" value="" size="20">
    <br><br><input type="submit" name="btn_simpan" value="Login">
  </form>
</body>

</html>