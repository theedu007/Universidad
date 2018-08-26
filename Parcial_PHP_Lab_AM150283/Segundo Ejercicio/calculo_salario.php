<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Total</title>
</head>

<body>
    <h2>El desgloce de su salario es: </h2>
    <?php
    $salarioBase = $_GET['salario'];
    $AFP = $salarioBase * 0.0725;
    $ISSS = $salarioBase * 0.03;
    $salarioConDescuentos = $salarioBase - ($AFP + $ISSS);
    $renta = calculoRenta($salarioConDescuentos);
    $salarioTotal = $salarioConDescuentos - $renta;
    
    echo("Su salario base es: $salarioBase <br>");
    echo("Descuento AFP: $AFP <br>");
    echo("Descuento ISSS: $ISSS <br>");
    echo("Salario con descuentos: $salarioConDescuentos <br>");
    echo("Renta: $renta <br>");
    echo("Salario Total: $salarioTotal");
    
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
</body>
</html>
