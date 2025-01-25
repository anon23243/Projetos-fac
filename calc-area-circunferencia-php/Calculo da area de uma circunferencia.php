<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php
  $pi = 3.14;
  $_GET ["raio"];

 $raio = $_GET ["raio"];
 $area = $pi * pow($raio, 2);
 echo $area;

       ?>
       <h1>Calculo da area de uma circunferencia</h1>
        <p>Digite o valor do raio da circunferencia</p>
       <form method="GET">
<input type="text" name="raio">
<input type="submit">


</form>
</body>
</html>