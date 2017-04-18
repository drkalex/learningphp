
    <pr> Ej007.php sacaren pantalla una serie de bucles </pr>
<hr>
<?php
$numeros_impares = [1,3,5,7,9,];
for ($i = 0; $i < count($numeros_impares); $i=$i+1) {
    $numero_impar = $numeros_impares[$i];
    echo $numero_impar . "\n";
}
// saca en pantalla los numeros_impares de  1 en 1
?>
<hr>
<?php
$numeros_impares = [1,3,5,7,9];
foreach ($numeros_impares as $numero_impar) {
  echo $numero_impar . "\n";
}
//foreach = "para cada" as = "con"
?>
<hr>
<?php
$numeros_telefonos = [
  "Alex" => "62-800-4310",
  "Amanda" => "68-122-4066",
];

foreach ($numeros_telefonos as $nombre => $numero) {
  echo "$nombre su numeros es $numero.\n";
}
?>
<hr>
<?php
$numeros_pares = [2,4,6,8,10,12,14,16,18,20];
foreach ($numeros_pares as $numero_par) {
  echo $numero_par . "\n";
}
?>
<hr>
<?php
$contador = 0;

while ($contador < 10) {
    $contador += 1;
    echo "Ejecutar - contador es $contador.\n";
}
// while = "mientras" saca en panta  (echo "Ejecutar - contador es $contador.\n";) con los numeros menores de 10
?>
<hr>
<?php
$contador = 0;

while ($contador < 10) {
    $contador += 1;

    if ($contador % 2 == 0) {
        echo "Saltar número  $contador porque es uniforme.\n";
        continue;
    }

    echo "Ejecutar - contador es $contador.\n";
}
// The continue statement ="La instrucción continua"
?>
<hr>
<?php
$contar = 0;

while ($contar < 10) {
    $contar += 1;

    if ($contar > 8) {
        echo "Si el contador es mayor que 8 se detiene el bucle.\n";
        break;
    }

    if ($contar % 2 == 0) {
        echo "Saltar el número  $contar porque es uniforme.\n";
        continue;
    }

    echo "Ejecutar - contador es $contar.\n";
}
// The break statement =""La declaracion de ruptura"
?>
