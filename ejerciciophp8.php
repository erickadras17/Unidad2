<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ejerciciophp7</title>
  </head>
  <body>
    <?php
    if (isset($_REQUEST['check1'])) {
      $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
      echo "La suma es: " . $suma . "<br>";
    }
    elseif (iseet($_REQUEST['check3'])) {
      $multiplicacion = $_REQUEST['valor'] * $_REQUEST['valor2'];
      echo "La multiplicacion es: " . $multiplicacion . "<br>";
    }
    else {
      if (isset($_REQUEST['check2'])) {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es: " . $resta . "<br>";
    }
    }
     ?>
  </body>
</html>
