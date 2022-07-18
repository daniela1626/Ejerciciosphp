<?php

//Bucle foreach

//array
$array[] = "Andres";
$array[] = "Sofia";
$array[] = "Karla";
$array[] = "Alejandro";
$array[] = "Manuel";

foreach($array as $value){
    echo $value;
    echo "<br/>";
}


foreach($array as $key => $value){
    echo "posicio: " . $key . " el nombre es: " . $value;
    echo "<br/>";
}



//recorrer un array multidimensional

$notas = array(
    '0' => array('materia' => "Ingles", "nombre" => "Andres", "nota" => 2.5),
    '1' => array('materia' => "Español", "nombre" => "Sofia", "nota" => 4.5),
    '2' => array('materia' => "Matematicas", "nombre" => "Karla", "nota" => 3.5),
    '3' => array('materia' => "Ingles", "nombre" => "Alejandro", "nota" => 3.5),
);

echo "---------------------------------------------------------------";
echo "<br/>";

foreach($notas as $key => $value){
    echo "la materia: " . $value["materia"]. " Persona: " . $value["nombre"]. " la nota es: " . $value["nota"];
    echo "<br/>";
}




?>
Footer
