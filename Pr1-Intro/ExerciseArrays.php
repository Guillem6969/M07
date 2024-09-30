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
    
    
