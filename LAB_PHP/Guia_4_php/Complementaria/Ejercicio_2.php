<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h3>Ejercicio 2</h3>
    <?php
    $array = [];
    $array_sec = [];
    $tam = rand(2,100);
    for($i=0;$i<$tam;$i++)
    {
        array_push($array,rand(1,100));
    }
    $cont = 0;
    for($i=0;$i<$tam;$i++)
    {
            $cont++;
            if($i % 2 == 0)
            {
                array_push($array_sec,$array[$cont]);
            }
    }
    echo array_sum($array_sec)/sizeof($array_sec) + "</br>";
    echo "</br>";
    echo "<h3>Posiciones impares</h3>";
    for($i=0;$i<$tam;$i++)
    {
        if($i % 2 == 0)
            echo "$array[$i] </br>";
    }
    ?>
</body>
</html>

