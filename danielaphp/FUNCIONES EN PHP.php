<?php

function saludarNombre(){
    echo "Hola Danielita";
}

function saludar(){
    echo "Hola ...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("DANIELA", "GUALDRON");



?>