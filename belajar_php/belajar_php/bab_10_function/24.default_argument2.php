<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function salam($nama="Anton"){
    echo "<p>Selamat Siang, $nama </p>";
  }
  
  salam();                   // Selamat Siang, Anton
  salam("Siska");            // Selamat Siang, Siska
  salam("Indonesia..!");     // Selamat Siang, Indonesia..! 
?>
</body>
</html>