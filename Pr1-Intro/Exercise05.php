<?php

$suma = 0;
$contadorPares = 0;
$contadorImpares = 0;

while ($suma <= 100) { 
    $numeroAleatorio = rand(0, 20);
    echo " -- Número generado: " . $numeroAleatorio . "\n<br>" ;
    $suma += $numeroAleatorio;
    if ($numeroAleatorio % 2 == 0) {
        $contadorPares++;
    } else {
        $contadorImpares++;
    }
}
// Mostrar la suma total de los números generados
echo"-------------------------------------------------------------<br>";
echo "Suma total de los números generados: " . $suma . "\n<br>";
echo"-------------------------------------------------------------<br>";

// Mostrar el total de números pares e impares generados
echo "Total de números pares: " . $contadorPares . "\n<br>";
echo"-------------------------------------------------------------<br>";

echo "Total de números impares: " . $contadorImpares . "\n<br>";
echo"-------------------------------------------------------------<br>";

