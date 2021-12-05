<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ejerciciophp7</title>
  </head>
  <body>
    <?php
    if ($_REQUEST['radio1'] == "suma") {
      $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
      echo "La suma es: " . $suma;
    }
    elseif ($_REQUEST['radio1'] == "multiplicar") {
      $multiplicar = $_REQUEST['valor'] * $_REQUEST['valor2'];
      echo "La multiplicacion es: " . $multiplicar;
    }
    else {
      if ($_REQUEST['radio1'] =="resta") {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es: " . $resta;
    }
    }
     ?>
  </body>
</html>
