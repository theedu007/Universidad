<?php
function recursividad($a)
{
 if ($a < 20) {
 echo "$a <br>";
 recursividad($a + 1);
 }
}
recursividad(1);
?>