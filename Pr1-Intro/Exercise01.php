<?php

// 1 ->
// Creamos las variables
$num1 = 10;
$num2 = 5;

// Creamos las variables que guardaran las operaciones
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;
    
// Mostramos todas nuestras variables
echo "Valor del numero 1: $num1<br>";
echo "-----------------------<br>";
echo "Valor del numero 2: $num2<br>";
echo "-----------------------<br>";
echo "Suma: $num1 + $num2 = $suma<br>";
echo "-----------------------<br>";
echo "Resta: $num1 - $num2 = $resta<br>";
echo "-----------------------<br>";
echo "División: $num1 / $num2 = $division<br>";
echo "-----------------------<br>";


//  2 ->
// Mostramos cual es mayor y cual es menor o si son iguales. 

if ($suma < $resta && $suma < $division) {
    echo "La suma ($suma) es el menor resultado.<br>";
} elseif ($resta < $suma && $resta < $division) {
    echo "La resta ($resta) es el menor resultado.<br>";
} elseif ($division < $suma && $division < $resta) {
    echo "La división ($division) es el menor resultado.<br>";
}

echo "-----------------------<br>";
if ($suma == $resta && $resta == $division) {
    echo "Todos los resultados de las operaciones son iguales.<br>";
} elseif ($suma == $resta) {
    echo "La suma y la resta son iguales ($suma).<br>";
} elseif ($suma ==  $division) {
    echo "La suma y la división son iguales ($suma).<br>";
} elseif ($resta == $division) {
    echo "La resta y la división son iguales ($resta).<br>";
}else{
    echo "Ningun resultado en las operaciones es igual<br>";
}
echo "-----------------------<br>";


// 3 ->

if ($num1 > 1 && $num2 > 1) {
    // Calcular el área del triángulo
    $area = ($num1 * $num2) / 2;

    // Mostrar los valores de la base, altura y el área calculada
    echo "Base del triángulo: $num1 m<br>";
    echo "-----------------------<br>";
    echo "Altura del triángulo: $num2 m<br>";
    echo "-----------------------<br>";

    echo "El área del triángulo es: $area m2 <br>";
} else {
    echo "Los valores de la base y la altura deben ser superiores a 1.<br>";
}