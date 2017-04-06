
<?php //Ejemplo aprenderaprogramar.com
$num1 = $_GET['num1'];
$num2 = $_REQUEST['num2'];
$volumen = $num1+$num2; //+ es la operacion a realizar se puede cambiar
echo "<br/> &nbsp; El resultado de los parametros  es $volumen"
?>
<?php
// ejemplo de como funciona GET importante tiene que ser "GET" en mayuscula,
// es es para al terminar "ej021Get1.php--> tenemos que escribir ?num1"numero que queramos calcular"&num2"numero que queramos calcular" y ENTER y sale en pantalla el resultado

//echo 'Hola ' . ($_GET["nombre"]) . '!';
?>
