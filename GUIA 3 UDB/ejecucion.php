<?php
require 'funciones_uno.php';
include 'funciones_dos.php';
$numero_uno = (integer) 15;
$numero_dos = (integer) 25;
$numero_tres = (integer) 10;
echo 'La suma de dos números es: <b>'.suma($numero_uno,$numero_dos)."</b><br>";
echo 'La resta de dos números es: <b>'.resta($numero_tres,$numero_dos)."</b><br>";
?>