<?php
// Generar un número aleatorio entre 1 y 8
$numero = rand(1, 8);

echo"El número que se ha generado es el $numero<br>";  
echo"-------------------------------------------------------------<br>";
switch ($numero) {
    case 1:
        echo "El número $numero indica que el dia de la semana es Lunes.<br>";
        break;
    case 2:
        echo "El número $numero indica que el dia de la semana es Martes.<br>";
        break;
    case 3:
        echo "El número $numero indica que el dia de la semana es Miércoles.<br>";
        break;
    case 4:
        echo "El número $numero indica que el dia de la semana es Jueves.<br>";
        break;
    case 5:
        echo "El número $numero indica que el dia de la semana es Viernes.<br>";
        break;
    case 6:
        echo "El número $numero indica que el dia de la semana es Sábado.<br>";
        break;
    case 7:
        echo "El número $numero indica que el dia de la semana es Domingo.<br>";
        break;
    default:
        echo "El número $numero no se corresponde con ningún día de la semana.<br>";
        break;
}

