<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php   
  $x = 10/3;
  $y = 3.3333333333333;
  
  var_dump($x); // float(3.3333333333333) 
  echo "<br>";
  var_dump($y); // float(3.3333333333333) 
  echo "<br>";
  
  var_dump($x == $y); // bool(false)
?>
</body>
</html>