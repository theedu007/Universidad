<?php
$cantidad = (integer) 100;
$i = (integer) 0;
echo 'Números impares del 1 al 100<br>';
for($i = 1; $i<=$cantidad ; $i++):
 if($i % 2):
 echo 'Número impar: '.$i.'<br>';
 endif;
endfor;
?>