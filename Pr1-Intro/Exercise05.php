<?php

$suma = 0;
$contadorPares = 0;
$contadorImpares = 0;

while ($suma <= 100) { 
    $numeroAleatorio = rand(0, 20);
    echo " -- Número generado: " . $numeroAleatorio . "<br>" ;
    $suma += $numeroAleatorio;

    if ($numeroAleatorio % 2 == 0) {
        $contadorPares++;
    } else {
        $contadorImpares++;
    }
}

echo"-------------------------------------------------------------<br>";
echo "Suma total: " . $suma . "<br>";
echo"-------------------------------------------------------------<br>";

echo "PARES: " . $contadorPares . "<br>";
echo"-------------------------------------------------------------<br>";

echo "IMPARES: " . $contadorImpares . "<br>";
echo"-------------------------------------------------------------<br>";
