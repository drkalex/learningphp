<?php
// define una función llamada `sum`
// recibe una lista de números como argumento.
function sum($numbers) {
  // inicializa la variable que devolveremos
    $sum = 0;

    // suma los numeros
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // devolver la suma al usuario
    return $sum;
}
// Ejemplo de uso de la suma
echo sum([1,2,3,4,5,6,7,8,9,10]);
?>
<hr>
