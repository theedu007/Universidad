<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecicio practico 1</title>
</head>

<body>
    <h3>Primer ejercicio</h3>
    <ol>
        <?php
        $array = [];
        for($i=1;$i<=20;$i++)
        {
            if($i % 2 == 0)
                array_push($array,$i);
        }
        foreach($array as $num)
        {
            echo "<li>$num</li>";
        }
        ?>
    </ol>
</body>
</html>
