<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta charset="">
    <title>Calculo del promedio</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <div class= "contenedor - principal">
    <h1 class = "contenedor - titulo">Instituto Tecnoligico de Tuxtepec<br>
    <img scr = "image/tec2.png" alt="" class="logo">
  </h1>
  <?php
  $nombre = $_POST['nombre'];
  $app = $_POST['app'];
  $apm = $_POST['apm'];
  $tema1 = $_POST['tema1'];
  $tema2 = $_POST['tema2'];
  $tema3 = $_POST['tema3'];
  $tema4 = $_POST['tema4'];
  $promedio = ($tema1*0.20)+($tema2*0.25)+($tema3*0.20)+($tema4*035) ;

  echo"Nombre: $nombre <br>";
  echo"Apellido Paterno: $app <br>";
  echo"Apellido Materno: $apm <br>";
  echo"Calificacion 1: $tema1 <br>";
  echo"Calificacion 2: $tema2 <br>";
  echo"Calificacion 3: $tema3 <br>";
  echo"Calificacion 4: $tema4 <br>";
  echo"<br> El promedio obtenido es de: $promedio";
  ?>
  <div class="">
    <a class="boton-salida" href="ejer18.html">Volver a ejecutar</a>
      </div>
    </div>
   </div>
</body>
</html>
