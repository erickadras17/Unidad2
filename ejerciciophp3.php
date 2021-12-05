<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Declaracion de variable en PHP</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="resultado">
    <?php
    $dia= date("d");      //se declara una variable de tipo interger.
    $sueldo= 1250.45;     //se declara una variable de tipo double.
    $nombre= "samy";      //se declara una variable de tipo string.
    $exite= true;         //se declara una variable de tipo boolean.
    echo "Variable entera:";
    echo $dia;
    echo "<br>";
    echo "Variable double:";
    echo $sueldo;
    echo "<br>";
    echo "Variable String:";
    echo  $nombre;
    echo "<br>";
    echo "Variable boolean:";
    echo $exite;
    ?>
    </div>
  </body>
</html>
