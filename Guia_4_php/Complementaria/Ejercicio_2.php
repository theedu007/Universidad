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
    $tam = rand(1,10);
    for($i=0;$i<$tam;$i++)
    {
        array_push($array,rand(1,100));
    }
    for($i=0;$i<$tam;$i++)
    {
            if(($i % 2) == 0)
            array_push($array_sec,$array[i]);
    }
    echo array_sum($array_sec)/sizeof($array_sec) + "</br>";
    ?>
</body>
</html>
