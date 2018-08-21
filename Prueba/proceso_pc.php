<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $CPU = $_POST['CPU'];
    $grafica = $_POST['grafica'];
    $ram = $_POST['ram'];
    $nombre = $_POST['nombre'];
    $num = $_POST['num_tarjeta'];
    $doc = $_POST['docu'];
    
    echo "<h2>Resumen Compra</h2>";
    if(CPU == 400)
    {
        echo "CPU: Intel Costo: $CPU";
    }
    else
    {
        echo "CPU: AMD Costo: $CPU";
    }
    echo "<br>";
    if(CPU == 600)
    {
        echo "Grafica: Nvidia Costo: $grafica";
    }
    else
    {
        echo "Grafica: AMD Costo: $grafica";
    }
    echo "<br>";
    if(CPU == 100)
    {
        echo "CPU: 8 GB Costo: $ram";
    }
    else
    {
        echo "CPU: 16 Gb Costo: $ram";
    }
    echo "<br>";
    $total = $CPU + $grafica + $ram;
    echo "total: $total";
    ?>
</body>
</html>
