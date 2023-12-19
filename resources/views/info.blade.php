<!DOCTYPE html>
<html>

<head>
  <title>Info Mahasiswa</title>
</head>

<body>
  <h1>
    Saya adalah mahasiswa Program Studi:
    <?php 
    if($progdi=="TI")
      echo "Teknik Informatika";
    elseif ($progdi=="SI") 
      echo "Sitem Informasi";
    elseif ($progdi=="IK")
      echo "Ilmu Komunikasi";
    else 
      echo "Tidak ada progdi tersebut di fakultas TIK";
    ?>
  </h1>
</body>

</html>