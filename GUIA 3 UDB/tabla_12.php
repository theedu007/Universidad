<?php
$dia_actual = (string) date("D");
$nombre_dia = (string) '';
if($dia_actual == 'Mon'):
 $nombre_dia = 'Lunes';
elseif($dia_actual == 'Tue'):
 $nombre_dia = 'Martes';
elseif($dia_actual == 'Wed'):
 $nombre_dia = 'Miércoles';
elseif($dia_actual == 'Thu'):
 $nombre_dia = 'Jueves';
elseif($dia_actual == 'Fri'):
 $nombre_dia = 'Viernes';
elseif($dia_actual == 'Sat'):
 $nombre_dia = 'Sabado';
else:
 $nombre_dia = 'Domingo';
endif;
echo 'Hoy es: <b>'.$nombre_dia.'</b><br>';
?>