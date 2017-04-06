<?php
    // Abrir el archivo en modo de sólo lectura:
    $archivo = fopen("archivopractica013.txt","a+");
    if( $archivo == false ) {
      echo "Error al abrir el archivo";
    }
    else
    {
         $cadena1 = fread($archivo, 18); // Leemos un determinado número de caracteres
         rewind($archivo);   // Volvemos a situar el puntero al principio del archivo
         $cadena2 = fread($archivo, filesize("archivopractica013.txt"));  // Leemos hasta el final del archivo
        if( ($cadena1 == false) || ($cadena2 == false) )
            echo "Error al leer el archivo";
        else
        {
            echo "<p>\$contenido1 es: [".$cadena1."]</p>";
            echo "<p>\$contenido2 es: [".$cadena2."]</p>";
        }
    }
    // Cerrar el archivo:
    fclose($archivo);
