<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $username="admin";
  $password="qwerty";
  
  if ($username=="admin"){
    if ($password=="qwerty") { 
      echo "Nama dan password sesuai, hak akses diberikan..";
    }
    else {
      echo "Nama sesuai, password tidak sesuai!";
    }
  }
  else if ($password=="qwerty") {
    echo "Nama tidak sesuai, password sesuai!";
  }
  else {
    echo "Nama dan password tidak sesuai!";
  }
?>
</body>
</html>