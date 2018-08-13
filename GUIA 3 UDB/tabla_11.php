<?php
$primer = (integer) 20;
$segundo = (integer) 5;
$tercer = (integer) 25;
$mayor = (integer) 0;
echo '<center>ESTRUCTURA IF - ELSE</center><br>';
echo 'LOS NUMEROS A COMPARAR: <b>'.$primer.','.$segundo.' y '.$tercer.'</b><br>';
if($primer > $segundo):
 $mayor = $primer;
else:
 $mayor = $segundo;
endif;
if($mayor < $tercer):
 $mayor = $tercer;
endif;
echo 'EL NUMERO MAYOR ES: <b>'.$mayor.'</b><br>'
?>
