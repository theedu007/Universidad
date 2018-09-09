<?php
echo "Las variables variables son nombres de variables que se pueden definir y usar dinámicamente,
    una variable variable toma el valor de una variable y lo trata como el nombre de una variable <br>";

//Ejemplo practico

$nombre = (string) 'Eduardo';
$apellido = (string) 'Arevalo';
$edad = (integer) 27;

echo "Nombre: $nombre <br>";
echo "apellido: $apellido <br>";
echo "Edad: $edad <br>";

echo "<br>";
$info = 'Eduardo';
echo "Nombre: ${$info} <br>";
$$info = 'Arevalo';
echo "apellido: ${$info} <br>";
$$info = '27';
echo "Edad: ${$info} <br>";

?>
