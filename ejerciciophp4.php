<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Numero al azar</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="resultado">
      <?php
      $valor = rand(1,10);
      echo "El valor sorteado es $valor<br>";
      if($valor <=5){
        echo "Es menor o igual a 5";
      }
      else {
        echo "Es mayor a 5";
      }
      ?>
    </div>
  </body>
</html>
