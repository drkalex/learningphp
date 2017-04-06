<?php
// define una función llamada `sum`
// recibe una lista de números como argumento.
function sumararray($numbers) {
  // inicializa la variable que devolveremos
    $sum = 0;

    // suma los numeros
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // devolver la suma al usuario
    return $sum ."<hr/>";
}
// Ejemplo de uso de la suma
echo sumararray([1,2,3,4,5,6,7,8,9,10]);
echo sumararray([1,2,3,4,5,6,7,8,9,10,7657]);
echo sumararray([1,2,3,4,5,6,7,8,9,10,765467]);
echo sumararray([1,2,3,4,5,6,7,8,9,10,987]);


?>
