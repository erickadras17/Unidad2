<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta charset="">
    <title>Calculo del promedio</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class= "contenedor - principal">
      <h1 class = "contenedor - titulo">Instituto Tecnoligico de Tuxtepec<br>
        <img scr = "image/tec2.png" alt="" class="logo">
      </h1>
      <div class="contenedor-formulario">
        <?php
        $nombre = $_POST['nombre'];
        $app = $_POST['app'];
        $apm = $_POST['apm'];
        $salari = $_POST['salario'];
        $diast = $_POST['diast'];
        $hrextras = $_POST['hrextras'];
        $tipo = 'Quincenal';

        $sueldo = $salario * dia
        $sueldo = $salario * $diast;
        if($hrextras <= 9){
          $hrextrasdoble = ()$salario /8) * 2;
          $totalhrextras = $hrextrasdoble * $hrextras;
        } else{
          $hrextrastriple = ()$salario /8) * 3;
          $totalhrextras = $hrextrastriple * $hrextras;
        }
        ?>
        <div class="table-title">Nomina del trabajador</div>
        <div class="container">
        <div>Nombre completo</div>
        <div>Tipo de nomina</div>
        <div>Salario percibido</div>
        </div>
        <div class="registro">
        <div><?php echo "">




        </div>
        <div class="container">
        <div>Horas Extras</div>
        <div>Monto Horas Extras</div>
        <div>Salario</div>
        </div>
        <div class="registro">
        <div><?php echo "$hextras"; ?></div>
        <div><?php echo "$totalhextras"; ?></div>
        <div><?php echo "$hextras"; ?></div>





        <div>Importe</div>
        </div>
        <div class="c">
        <div><?php echo "sueldo base"; ?></div>
        <div></div>
        <div><?php echo "sueldo base"; ?></div>
      </div>
    </div>
   </div>
</body>
</html>
