<html>
<head>
  <title> Ej005.php </title>
</head>
<body>
  <pr> Ej005.php sacar por pantalla el nombre y la edad, y realizar unas operaciones de sumay multiplicación </pr>
  <center>
    <table>
      <tr>
        <td>
<?php
$saltolinea = "<br/><hr/></br>";
$nombre = "Alexander";
$edad = 20;
echo "Hola $nombre. Tu tienes $edad años.$saltolinea";

$x = 105;
$y = 369;
$suma = $x + $y;

echo "La suma de $x y $y es = $suma.$saltolinea";

$m = 2;
$d = 4;
$resultado = $m * $d;

echo "La multiplicacion de $m y $d es = $resultado.$saltolinea";
?>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
