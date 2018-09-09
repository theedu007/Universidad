<?php
function foo($arg_1,$arg_2,/*...,*/$arg_n)
{
echo 'Función de ejemplo.\n';
return $valor_devuelto;
}

function recursividad($a)
{
if ($a < 20) {
echo "$a <br>";
recursividad($a + 1);
}
}
recursividad(1);
?>