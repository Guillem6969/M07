<?php
echo"1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:<br>
2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.<br>
3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while.<br>
4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.<br>
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable.  <br><br>";
echo"-------------------------------------------------------------<br>";


// 1. Declarar dos variables con valores superiores a 10
$var1 = 14; 
$var2 = 11;

echo"El primer numero es: $var1";
echo "<br><br>";
echo"El segundo numero es: $var2";
echo "<br><br>";
echo"-------------------------------------------------------------<br>";
// 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera variable (var1)
echo"2-<br>";
echo "Progresión de números pares desde 0 hasta $var1:<br>";
for ($i = 0; $i <= $var1; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";
echo"-------------------------------------------------------------<br>";

// 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while
echo"3-<br>";
echo "Progresión numérica desde $var2 hasta 0:<br>";
$contador = $var2;
while ($contador >= 0) {
    echo $contador . " ";
    $contador--;
}
echo "<br><br>";
echo"-------------------------------------------------------------<br>";

// 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while
echo"4-<br>";
echo "Progresión numérica desde $var1 hasta $var2:<br>";
if ($var1 > $var2) {
    $progresion = $var1;
    do {
        echo $progresion . " ";
        $progresion--;
    } while ($progresion >= $var2);
} else {
    // Si la segunda variable es más pequeña, sólo imprime el valor de la primera variable una vez
    echo $var1 . "<br>";
}



