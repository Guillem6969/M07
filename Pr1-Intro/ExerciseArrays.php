 <?php
// 1) Crea un array asociativo con los siguientes datos y claves.
// nombre: Sara, apellido: Martinez, edad: 23, ciudad: Barcelona.
// Muestra los valores del array anterior uƟlizando foreach. 
echo"-------------------------------------------------------------<br>";
echo"EJERCICIO 1 <br>";
$persona = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => "23" ,"Ciudad"=>"Barcelona");
$contador = 0;
foreach ($persona as $a => $b) {
    $contador++;
    echo "dato $contador º: ". $b ." <br>";
}

echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 2 <br>";
// Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
// foreach. 
foreach ($persona as $a => $b) {
    $contador++;
    echo "". $a .": ". $b ."<br>";
}

echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 3 <br>";
// 3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información
$persona = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => "24" ,"Ciudad"=>"Barcelona");
foreach ($persona as $a => $b) {
    $contador++;
    echo "dato $contador º: ". $b ." <br>";
}

echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 4<br>";
// 4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función
// var_dump. 
$persona = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => "24");
var_dump(value: $persona);

echo"<br>";
echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 5<br>";
// Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
// $letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
// información en orden descendente
$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);
for ( $y = count($arrayLetters); $y > 0; $y-- ){
    echo "letter $y º: ". $arrayLetters[$y - 1] ." <br>";
}
    
echo"<br>";
echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 6<br>";
// 6) Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
// las siguientes:
// Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
// Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
// mayor a menor
$notas = [
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];
arsort($notas);
echo "Notas de los estudiantes:";
foreach ($notas as $estudiante => $nota) {
    echo " $estudiante : $nota ";
}


echo"<br>";
echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 7<br>";
// Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
// nombres de los alumnos cuya nota esté por encima de la media. ç

$suma_notas = array_sum($notas); 
$numero_estudiantes = count($notas); 
$media = $suma_notas / $numero_estudiantes;


echo "Media de las notas: ". number_format($media, 2)."<br>";

echo "Alumnos con nota por encima de la media: <br>";
foreach ($notas as $estudiante => $nota) {
    if ($nota > $media) {
        echo "$estudiante <br>";
    }
}

echo"<br>";
echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";
echo"EJERCICIO 8<br>";

// Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
// el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
// array


$nota_mas_alta = max($notas); 


$mejor_alumno = array_search($nota_mas_alta, $notas); 

echo "La nota mas alta es: $nota_mas_alta y el mejor alumno es: $mejor_alumno.";

echo"<br>";
echo"<br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";

