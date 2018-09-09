<?php
echo 'Mi primer codigo en PHP';
echo "Mi segundo codigo en PHP";

$primer_entero = (integer) 18;
$segundo_entero = (integer) -18;
$tercer_entero = (integer) 0x12;


$sumatoria_entera = $primer_entero + $tercer_entero;
echo '<br>La sumatorio entre las dos variables enteras es de: '.$sumatoria_entera;

$resta_entera = $segundo_entero - $tercer_entero;
echo "<br>La diferencia entre las dos variables enteras es de: <b>$resta_entera</b>";
?>