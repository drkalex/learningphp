
    <pr> Ej006.php saca por pantalla nombres, cuenta el numero de caracteres que tiene una linea, saca por pantalla la fruta que esta en segundo lugar, o la lista de grutas, y puede sacar la extencion por ejemplo de una imagen "jpg" </pr>
<hr>
<?php
$nombre = "Esneider";
echo $nombre;
?>
<hr>
<?php
$nombre = "Alexander";
$introducion = "Hola $nombre";
echo $introducion;
?>
<hr>
<!-- Las dos comillas " / " sirven para poner algo intermedio entre el primer y segundo nombre -->
<?php
$primer_nombre = "Esneider";
$segundo_nombre = "alexander";
$nombre = $primer_nombre . " / " . $segundo_nombre;
echo $nombre;
?>
<hr>
<!--"strlen" para medir la longitud de una cadena, cuenta el numero de caracteres de la linea-->
<?php
$String = "La longitud de esta cadena es de 47 caracteres.";
echo strlen($String);
?>
<hr>
<!-- cortamos la parte de la informacion de la imagen, para poder contar su extencion, marcamos el numero de palabras que tiene esa extencion para sacarla en pantalla-->
<?php
$Ndocumento = "cs_bg_champions.png";
$extension = substr($Ndocumento, strlen($Ndocumento) - 3);
echo "La extension del documento es : $extension";
?>
<hr>
<!-- cuenta el numero de frutas que tien la lista para luego elejir su pocicion y sacarla en pantalla-->
<?php
$frutas = "Manzana,Pera,Naranja,Uvas";
$lista_frutas = explode(",", $frutas);
echo "La segunda fruta en la lista es : $lista_frutas[1]";
?>
<hr>
<!-- muestra en pantalla el nombre de la lista_frutas -->
<?php
$lista_frutas = ["Manzana","Pera","Naranja"];
$frutas = implode(",", $lista_frutas);
echo "Las frutas son :$frutas";
?>
