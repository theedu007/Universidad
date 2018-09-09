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
    require 'calculo_renta.php';
    
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
    echo("Salario Total mensual: $salarioTotal <br>");
    $salarioQuincenal = round(($salarioTotal/2), 2,  PHP_ROUND_HALF_UP);
    echo("Salario Quincenal: $salarioQuincenal");
    ?>
</body>
</html>
