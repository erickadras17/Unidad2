<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2 en PHP</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="contenedor-titulo">
    <h1 class="contenedor-titulo">Instituto Tecnologico de Tuxtepec<br>
    </div>
    <div class="resultado">
      <?php
        $dia = date("d");
        if($dia <=10){
          echo "Sitio activo";
        }
        else {
          echo "Sitio fuera de servicio";
        }
      ?>
    </div>
  </body>
</html>
