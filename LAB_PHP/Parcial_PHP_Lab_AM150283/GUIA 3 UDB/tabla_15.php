<?php
$cantidad = (integer) 0;
echo 'Números pares del 1 al 100<br>';
while($cantidad<=100):
 if(!($cantidad % 2)):
 echo 'Número impar: '.$cantidad.'<br>';
 endif;
 $cantidad++;
endwhile;
?>