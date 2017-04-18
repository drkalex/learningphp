<?php

$nombreEjercicio = $_GET['ejercicio'];
//$descripcionEjercicio = $_GET['descripcion'];
if(file_exists($nombreEjercicio . ".php")){
  $archivoEjercicio = $nombreEjercicio.".php";
}elseif (file_exists($nombreEjercicio . ".html")) {
  $archivoEjercicio = $nombreEjercicio.".html";
}else{
  $archivoEjercicio = $nombreEjercicio.".php";
  file_put_contents($nombreEjercicio.".php", "El archivo <b>$archivoEjercicio</> seacaba de generar para que puedas empezar a trabar");
}
?>

<html>

<head>
  <title>Ejercicios de Esneider</title>
</head>
<body>
  <pr> <?php echo "$nombreEjercicio $descripcionEjercicio"; ?>
  <center>
    <div style="background-color: yellow;">
      <?php
      include($archivoEjercicio);

      ?>
    </div>
      </center>
      </body>
      </html>
