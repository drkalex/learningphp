<?php
    $cadena = file_get_contents("archivopractica014.txt");
    $cadena .= "\r\nPracticas de php!";
     file_put_contents("archivopractica014.txt", $cadena);
?>
