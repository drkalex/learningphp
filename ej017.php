<?php
// creas una carpeta, despues puedes introducir lainformacion que quieres que se muestreen dicha carpeta
//en nuestro caso creamos la carpeta "practica017"
// y despues de la coma "," se intrudoce lainformacion que mostrara la carpeta 
file_put_contents("practica017.txt",array(1 => 'Darius', 'Akali', 'Fiora', 'Jax', 'Varus'));
print_r(file_get_contents("practica017.txt"));
?>
