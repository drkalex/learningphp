<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creamos el archivo. Con nombre "archivopractica013.txt"

     $archivo = fopen("archivopractica013.txt", "a+");    // Abrir el archivo, creándolo si no existe
    if( $archivo == false ){
      echo "Error al crear el archivo";
      return;
    }

    echo "El archivo ha sido creado";
    // Añadimo contenido al archivo. "He conseguido introducir texto en el archivo"
    // Abrir el archivo, creándolo si no existe:

    // Escribir en el archivo:
     fwrite($archivo, "Practicas\r\n");
     fwrite($archivo, "el uso de archivos ");
     fwrite($archivo, "en PHP ");

     // Fuerza a que se escriban los datos pendientes en el buffer:espacio en memoria RAM
     fflush($archivo);

     // Cerrar el archivo:
     fclose($archivo);

?>
