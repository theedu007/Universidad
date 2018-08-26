<?php
function calculoRenta($salarioConDescuentos)
{
    if($salarioConDescuentos >= 0.01 || $salarioConDescuentos <= 472)
    {
        return (0);
    }
    if($salarioConDescuentos >= 472.01 || $salarioConDescuentos <= 895.24)
    {
        $excesoPorPorcentaje = ($salarioConDescuentos - 472) * 0.1;
        return ($excesoPorPorcentaje + 17.67);
    }
    if($salarioConDescuentos >= 895.25 || $salarioConDescuentos <= 2038.10)
    {
        $excesoConPorcentaje = ($salarioConDescuentos - 895.24) * 0.2;
        return ($excesoPorPorcentaje + 60);
    }
    if($salarioConDescuentos >= 2038.11)
    {
        $excesoPorPorcentaje = ($salarioConDescuentos - 2038.10) * 0.3;
        return ($excesoPorPorcentaje + 288.57);
    }
}
?>